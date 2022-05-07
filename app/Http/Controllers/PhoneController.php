<?php

namespace App\Http\Controllers;

use App\Builders\PhoneBuilder;
use App\Builders\PhoneBuilderManager;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller {
    public function index( Request $request ) {
        $phones = Phone::withCamera( $request->get( 'camera_from' ), $request->get( 'camera_to' ) )
                       ->withRam( $request->get( 'ram_from' ), $request->get( 'ram_to' ) )
                       ->withMemory( $request->get( 'memory_from' ), $request->get( 'memory_to' ) )
                       ->withScreen( $request->get( 'screen_from' ), $request->get( 'screen_to' ) )
                       ->withCores( $request->get( 'cores_from' ), $request->get( 'cores_to' ) )
                       ->get();

        $phones = $this->phonesResource( $phones );

        return view( 'phones' )->withPhones( $phones );
    }

    public function createPhone( Request $request ) {
        $phone = ( new PhoneBuilder() )
            ->setName( $request->get( 'name' ) )
            ->setPrice( $request->get( 'price' ) )
            ->setMemory( $request->get( 'memory' ) )
            ->setRam( $request->get( 'ram' ) )
            ->setCamera( $request->get( 'camera' ) )
            ->setScreen( $request->get( 'screen' ) )
            ->setCores( $request->get( 'cores' ) )
            ->getPhone();

        return redirect( '/' );
    }

    public function createPhoneOnBase( Request $request ) {
        $builder = new PhoneBuilder();
        $boss    = new PhoneBuilderManager( $builder );

        $phoneType = $request->get( 'phone_template' );
        if ( ! empty( $phoneType ) ) {
            switch ( $phoneType ) {
                case 'iphone_12':
                    $boss->createIphone12( $request->get( 'price' ), $request->get( 'memory' ) );
                    break;
                case 'xiaomi_redmi_note_4':
                    $boss->createXiaomiRedmiNote4( $request->get( 'price' ), $request->get( 'memory' ) );
                    break;
                case 'samsung_15':
                    $boss->createSamsung15( $request->get( 'price' ), $request->get( 'memory' ) );
                    break;
            }
        }

        return redirect( '/' );
    }

    private function phonesResource( $phones ) {
        $resultArray = [];
        foreach ( $phones as $phone ) {
            $phoneArray = [
                'id'    => $phone->id,
                'name'  => $phone->name,
                'price' => $phone->price,
            ];
            $phoneMetas = $phone->meta;
            foreach ( $phoneMetas as $phoneMeta ) {
                $phoneArray[ $phoneMeta->key ] = $phoneMeta->value;
            }
            $resultArray[] = $phoneArray;
        }

        return $resultArray;
    }

    public function showCreatePage() {
        return view( 'create-phone' );
    }

    public function showCreateOnBasePage() {
        return view( 'create-on-base-phone' );
    }
}

<?php

namespace App\Builders;

use App\Interfaces\PhoneBuilderInterface;

class PhoneBuilderManager {

    private $builder;

    public function __construct( PhoneBuilderInterface $builder ) {
        $this->builder = $builder;
    }

    public function createIphone12( $price, $memory ) {
        $phone = $this->builder->setName( 'iPhone 12' )
                     ->setPrice( $price )
                     ->setMemory( $memory )
                     ->setRam( 8 )
                     ->setCamera( 48 )
                     ->setScreen( 12 )
                     ->setCores( 8 )
                     ->getPhone();

        return $phone;
    }

    public function createXiaomiRedmiNote4( $price, $memory ) {
        $phone = $this->builder->setName( 'Xiaomi Redmi Note 4' )
                               ->setPrice( $price )
                               ->setMemory( $memory )
                               ->setRam( 4 )
                               ->setCamera( 18 )
                               ->setScreen( 16 )
                               ->setCores( 2 )
                               ->getPhone();

        return $phone;
    }

    public function createSamsung15( $price, $memory ) {
        $phone = $this->builder->setName( 'Samsung 15' )
                               ->setPrice( $price )
                               ->setMemory( $memory )
                               ->setRam( 7 )
                               ->setCamera( 22 )
                               ->setScreen( 11 )
                               ->setCores( 2 )
                               ->getPhone();

        return $phone;
    }
}

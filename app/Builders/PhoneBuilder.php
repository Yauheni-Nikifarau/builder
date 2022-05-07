<?php

namespace App\Builders;

use App\Interfaces\PhoneBuilderInterface;
use App\Models\Phone;
use App\Models\PhoneMeta;

class PhoneBuilder implements PhoneBuilderInterface {

    private $phone;
    private $phonesMeta = [];


    public function __construct () {
        $this->phone = new Phone();
    }

    public function reset () : PhoneBuilder {
        $this->phone = new Phone();
        $this->phonesMeta = [];

        return $this;
    }

    public function setName ($name) : PhoneBuilder {
        if (!empty($name)) {
            $this->phone->name = $name;
        }

        return $this;
    }

    public function setPrice ($price) : PhoneBuilder {
        if (!empty($price)) {
            $this->phone->price = $price;
        }

        return $this;
    }

    public function setCamera ($camera) : PhoneBuilder {
        if (!empty($camera)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'camera';
            $phoneMeta->value = $camera;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setRam ($ram) : PhoneBuilder {
        if (!empty($ram)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'ram';
            $phoneMeta->value = $ram;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setScreen ($screen) : PhoneBuilder {
        if (!empty($screen)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'screen';
            $phoneMeta->value = $screen;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setMemory ($memory) : PhoneBuilder {
        if (!empty($memory)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'memory';
            $phoneMeta->value = $memory;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setCores ($cores) : PhoneBuilder {
        if (!empty($cores)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'cores';
            $phoneMeta->value = $cores;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function getPhone () : Phone {
        $phone = $this->phone;
        $phone->save();
        foreach ($this->phonesMeta as $phoneMeta) {
            $phoneMeta->phone_id = $phone->id;
            $phoneMeta->save();
        }
        $this->reset();

        return $phone;
    }
}

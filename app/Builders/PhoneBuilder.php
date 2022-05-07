<?php

namespace App\Builders;

use App\Models\Phone;
use App\Models\PhoneMeta;

class PhoneBuilder {

    public $phone;
    public $phonesMeta = [];


    public function __construct () {
        $this->create();
    }

    public function create () {
        $this->phone = new Phone();
    }

    public function setName ($name) {
        if (!empty($name)) {
            $this->phone->name = $name;
        }

        return $this;
    }

    public function setPrice ($price) {
        if (!empty($price)) {
            $this->phone->price = $price;
        }

        return $this;
    }

    public function setCamera ($camera) {
        if (!empty($camera)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'camera';
            $phoneMeta->value = $camera;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setRam ($ram) {
        if (!empty($ram)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'ram';
            $phoneMeta->value = $ram;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setScreen ($screen) {
        if (!empty($screen)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'screen';
            $phoneMeta->value = $screen;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setMemory ($memory) {
        if (!empty($memory)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'memory';
            $phoneMeta->value = $memory;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function setCores ($cores) {
        if (!empty($cores)) {
            $phoneMeta = new PhoneMeta();
            $phoneMeta->key = 'cores';
            $phoneMeta->value = $cores;
            $this->phonesMeta[] = $phoneMeta;
        }

        return $this;
    }

    public function savePhone () {
        $this->phone->save();
        foreach ($this->phonesMeta as $phoneMeta) {
            $phoneMeta->phone_id = $this->phone->id;
            $phoneMeta->save();
        }
        return $this->phone;
    }
}

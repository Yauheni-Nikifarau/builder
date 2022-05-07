<?php

namespace App\Interfaces;

use App\Models\Phone;

interface PhoneBuilderInterface {
    public function reset () : PhoneBuilderInterface;

    public function setName (string $value) : PhoneBuilderInterface;

    public function setPrice (int $value) : PhoneBuilderInterface;

    public function setCamera (int $value) : PhoneBuilderInterface;

    public function setCores (int $value) : PhoneBuilderInterface;

    public function setRam (int $value) : PhoneBuilderInterface;

    public function setMemory (int $value) : PhoneBuilderInterface;

    public function setScreen (int $value) : PhoneBuilderInterface;

    public function getPhone () : Phone;
}

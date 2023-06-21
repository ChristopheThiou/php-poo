<?php

namespace App\Example;

class Fish extends Animal{
    public bool $inWater = false;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function swim(){
        if ($this->inWater == false) {
            echo "{$this->name} nage dans l'eau";
            return;
        }echo "{$this->name} ne peut pas nager hors de l'eau";
    }
    public function breath() {
        if ($this->inWater == true) {
            echo parent::breath();
            return;
        }echo "{$this->name} is dead";
    }
}
<?php

class Animal {
    public $name;
    public $legs = 4;
    public $legs1 = 2;
    public $cold_blooded = false;

    public function __construct($name) {
        $this->name = $name;
    }
}

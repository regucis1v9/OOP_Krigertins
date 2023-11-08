<?php

abstract class Animal {

    public $name;
    protected $age = 0;


    public function birthday(){
        $this->age+=1;
    }

    abstract static function eat();
}


?>
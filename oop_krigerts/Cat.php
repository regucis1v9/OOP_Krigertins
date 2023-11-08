<?php

class Cat{
    public $name;
    private $age = 0;

    public function birthday(){
        $this->age+=1;
    }
    static function moew(){
        echo "moew!";
    }
}

?>
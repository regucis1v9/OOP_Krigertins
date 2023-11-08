<?php

class Car{

    public $brand;
    private  $mileage = 0;

    function __construct($brand, $mileage){
        $this->brand = $brand;
        $this->mileage = $mileage;
        echo $this->brand ." has ". $this->mileage . " km <br>" ;
    }
    function __destruct(){
        echo $this->brand. " is sold";
    }

    static function makeNoise(){
        echo "beeep beep!! <br>";
    }
}


?>
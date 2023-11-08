<?php
include "Vehicle.php";
class Car extends Vehicle{


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
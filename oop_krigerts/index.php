<?php 
// require_once "class.php";


// $myCar = new Car("BMW", 291367);


// Car::makeNoise();
require_once "Cat.php";

$Mincis = new Cat;
$Mincis->name = "Mincis";
echo $Mincis->name . "<br>";
$Mincis->birthday();


$Brincis = new Cat;
$Brincis->name = "Brincis";
echo $Brincis->name . "<br>";


Cat::moew();
?>
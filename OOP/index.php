<?php

# Inheritance in OOP

include "./models/Car.php";

$car = new Car("BMW",1230,150);

// $car->setData("BMW",1230);
$car->display();
$car->test();
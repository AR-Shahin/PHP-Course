<?php
require "Vehicle.php";

class Car extends Vehicle{
    public $fuel;
    public function __construct($name,$speed,$fuel){
        parent::__construct($name,$speed);
        $this->fuel = $fuel;
    }
    public function test(){
        echo "Test";
    }
    
}
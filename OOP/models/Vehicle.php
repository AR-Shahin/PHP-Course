<?php

class Vehicle{

    public $name;
    public $speed;

    // public function setData($name,$speed){
    //     $this->name = $name;
    //     $this->speed = $speed;
    // }

    public function __construct($name,$speed)
    {
        $this->name = $name;
        $this->speed = $speed;
    }
    public function display()
    {
        echo "Name : " . $this->name . "<br>";
        echo "Speed : " . $this->speed . "<br>";
    }
}
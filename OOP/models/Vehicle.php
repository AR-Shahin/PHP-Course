<?php

class Vehicle{

    public $name;
    public $speed;
    private $license;
    public function __construct($name,$speed)
    {
        $this->name = $name;
        $this->speed = $speed;
    }
    protected final function display()
    {
        echo "Name : " . $this->name . "<br>";
        echo "Speed : " . $this->speed . "<br>";
    }

    private function another()
    {
        echo "Name : " . $this->name . "<br>";
        echo "Speed : " . $this->speed . "<br>";
    }
    public function getLicense(){
        return $this->license;
    }

    public function setLicense($license){
        $this->license = $license;
    }
}
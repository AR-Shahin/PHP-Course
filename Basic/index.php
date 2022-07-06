<?php

class User {
    public $name;
    public $age;
    public $email;

    public static $address;

    public function display(){
       echo $this->name;
    }

    public function play(){
        
    }

    public function eat(){
        
    }

    public static function test(){
        echo self::$address;
    }
    public function getAddress()
    {
        echo self::$address;
    }
}

// User::$address = "Dhaka";
// User::test();
$user = new User();
$user2 = new User();
$user->name = "User 1";
User::$address = "User One Address";
$user->getAddress();
$user2->getAddress();
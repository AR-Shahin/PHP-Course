<?php

# Constant In Class

class User {
    public $name;
    public $age;
    public $email;

    public const PI = 3.1416;

    public static $address;

    public function display(){
       echo $this->name;
    }

    public function play(){
        
    }

   public function area($r){
        echo self::PI * $r * $r;
   }

    public static function test(){
        echo self::$address;
    }
    public function getAddress()
    {
        echo self::$address;
    }
    
   

}




 
$user = new User();
echo $user->area(3);
// echo User::PI;
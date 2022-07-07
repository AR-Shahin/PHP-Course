<?php

# Magic Method in PHP

class User {
    // public $name;
    // public $age;
    // public $email;

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
    
    // public function __construct(string $n,int $a)
    // {
    //     $this->name = $n;
    //     $this->age = $a;
    // }

    // public function __construct(public $name,public $age, public $email)
    // {
        
    // }

    // public function __destruct()
    // {
    //     echo "<br> I am calling from destructor";
    // }

    // public function __invoke()
    // {
    //     echo "I am invoking <br>";
    // }

    public $data = [];
    public function __get($property)
    {
        if(array_key_exists($property,$this->data)){
            return $this->data[$property];
        }else{

            echo "This $property doesn't exits! <br>";
        }
    }

    public function __set($key,$val){
        $this->data[$key] = $val;
    }

    public function __call($name, $arguments)
    {
        var_dump($name);
        echo "<br>";
        var_dump($arguments);
    }
    public static function __callStatic($name, $arguments)
    {
        var_dump($name);
        echo "<br>";
        var_dump($arguments);
    }

}


// (new User())();

 
$user = new User();
// $user->anything = "abc";
// echo $user->anything;
// echo "<br>";
// $user->abc = 123;
// echo $user->abc;

// $user->any(10,20,30);

User::any("test");
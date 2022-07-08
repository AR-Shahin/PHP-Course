<?php

abstract class User{
    public function display(){

    }

    abstract public function sayHello($name) :void;
}

// $user = new User();

interface Great{
    public function sayHello($name) :void;

}

interface Great1{
    public function sayHello1($name) :void;

}
class Student extends User{
    public function sayHello($name):void{

    }
}

class Teacher implements Great,Great1{
    public function sayHello($name) :void{

    }
    public function sayHello1($name) :void{

    }
}
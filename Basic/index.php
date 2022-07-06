<?php

class User {
    public $name;
    public $age;
    public $email;

    public function display(){
       echo $this->name;
    }

    public function play(){
        
    }

    public function eat(){
        
    }
}

class Student{
    public $name;
}

$user1 = new User();
$user1->name = "User 1";

// echo $user1->display();

echo "<br>";
$user2 = new User();
// $user2->name = "User 2";

// echo $user2->name;


$stu = new Student();

if($stu instanceof Student)
{
    echo "Yes";
}else{
    echo "NO";
}
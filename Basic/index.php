<?php

// if(!function_exists("funName")){
//     function funName(){
//         echo "Hello World";
//     }
// }

function funName($name) : string
{
    return "Hello $name <br>";
}

// echo funName("World");
// echo funName("Test");


function info(string $name,int $age = 15) :void{

    echo "Name : $name <br>";
    echo "Age : $age <br>";
}

$name = "Test";
// info(age: 20,name :$name);


function display(...$params) :void{
    var_dump($params[0]);

}


// display(10,20,30,40,50,60,"test");


$sum = function($a,$b){
    return $a + $b;
};

// echo $sum(100,20);

$sub = fn($a,$b) =>  $a - $b;


echo $sub(20,10);
<?php

# Array 

$arr = array(15,20,30,50,"PHP");

$brr = [10,20,30,40,50];

// for($i=0;$i<count($brr);$i++){
//     echo "Array value " . $brr[$i] . "<br>";
// }

// $students = array("name" => "PHP","age" => 22);
$students = ["name" => "PHP","age" => 22];
// echo $students["age"];

// foreach($students as  $value){
//     echo " Value $value <br>";
// }


$c = [[10,20],200,300];

// var_dump($c[1]);


$d = [10,20,30];

// array_push($d,40);
// $e = array_reverse($d);
$sum = array_sum($d);
var_dump($sum);
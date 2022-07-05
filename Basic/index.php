<?php

# Variable Scope in PHP

$num = 10;

function fun(){
    // global $num;
    static $num2 = 100;
    echo $num2;
    $num2 += 50;
}

fun();
echo "-------";
fun();
echo "-------";
fun();
// echo $num2;
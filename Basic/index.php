<?php

# Super Global Variable In PHP

$a = 10;
$b =20;
$c = 30;

function test(){
    // global $a,$b,$c;
    // echo $a + $b + $c;

    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

test();
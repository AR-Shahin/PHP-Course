<?php

# Call by value and Call by reference 


function test(&$a){
    $a = 100;
    echo "Inside Fun : $a <br>";
}
$var = 10;
test($var);

echo "Outside Fun : $var <br>";
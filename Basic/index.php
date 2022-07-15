<?php

use App\model\User;
use App\model\Teacher;
use NumberToWords\NumberToWords;

require "./vendor/autoload.php";

$user = new User;
$te = new Teacher;


// create the number to words "manager" class
$numberToWords = new NumberToWords();

// // build a new number transformer using the RFC 3066 language identifier
$numberTransformer = $numberToWords->getNumberTransformer('en');

echo $numberTransformer->toWords(1000);
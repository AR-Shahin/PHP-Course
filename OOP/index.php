<?php

include "Vehicle.php";
include "./models/Vehicle.php";

use aaa\Vehicle as Temp;
use abc\Vehicle as Test;


$a = new Temp("BMW",123);
$a->display();

$b = new Test();
$b->name = "anc";
<?php

# Date Time In PHP
date_default_timezone_set("Asia/Dhaka");
// echo date("Y:m:d H:i:s a");

 $today = date("F j, Y, g:i a"); 


echo strtotime($today);
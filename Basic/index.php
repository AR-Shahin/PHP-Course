<?php

// $data = [
//     "name" => "PHP",
//     "age" => 22
// ];

// var_dump($data);
// echo json_encode($data);

$data = '{"Peter":35,"Ben":37,"Joe":43}';

 print_r(json_decode($data));
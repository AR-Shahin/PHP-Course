<?php

if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $re_password = $_REQUEST['re_password'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];

    $skills = $_REQUEST['skills'];

    echo "Name : $name <br>";
    echo "Email : $email <br>";
    echo "Password : $password <br>";
    echo "Re : $re_password <br>";
    echo "Age  : $age <br>";
    echo "Gender : $gender <br>";
    echo "Skills ";
    foreach($skills as $skill){
        echo $skill . " ";
    }
}
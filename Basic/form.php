<?php

if(isset($_POST['submit'])){
 
    // $skills = $_POST['skills'];

    // foreach($skills as $skill){
    //     echo $skill . " ";
    // }

   $file =  $_FILES['file']['name']; 

   echo $file / (1024 * 1024);

   $ext = pathinfo($file,PATHINFO_EXTENSION);

   $tmp = $_FILES['file']['tmp_name'];

   $name = time() . "." . $ext;


   move_uploaded_file($tmp,"./file/$name");

function validation($field,$key) :void{
    if(empty($field)){
        global $errors;
        $errors["$key"] = "$key is required!";
    }
}
$errors = [];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $age = $_REQUEST['age'];

    validation($name,"name");
    validation($email,"email");
   
    if(empty($password)){
        $errors['password'] = "password is required!";
    }
    if(empty($age)){
        $errors['age'] = "age is required!";
    }

    foreach($errors as $key => $value){
        echo $value . "<br>";
    }

   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name"> <br>
        <span class="text-danger" style="color: red;">
        <?php
        if(!empty($errors['name']))
            echo $errors['name'];
        ?>
        </span> <br>
        <input type="email" name="email"> <br>
        <input type="password" name="password"> <br>
        <input type="number" name="age"> <br>
        <button name="submit">Submit</button>
    </form>
</body>
</html>
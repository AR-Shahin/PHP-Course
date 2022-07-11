<?php

if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $re_password = $_REQUEST['re_password'];
    $age = $_REQUEST['age'];

    $errors = [];
    if(empty($name)){
        $errors['name'] = "Name Field is Required!";
    }
    if(empty($email)){
        $errors['email'] = "Email Field is Required!";
    }

    if(empty($password)){
        $errors['password'] = "Password Field is Required!";
    }
    if(empty($re_password)){
        $errors['re_password'] = "Re Password Field is Required!";
    }
    if(empty($age)){
        $errors['age'] = "Age Field is Required!";
    }

    if(!empty($name) && !empty($email) && !empty($password) && !empty($re_password) && !empty($age) ){

        echo "Name : $name <br>";
        echo "Email : $email <br>";
        echo "Password : $password <br>";
        echo "Re : $re_password <br>";
        echo "Age  : $age <br>";
    }else{
        // foreach($errors as $key=>$value){
        //     echo "<span style='color:red'>$value</span> <br>";
        // }
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
    <form action="" method="POST">
        <label for="">Name : </label><input type="text" placeholder="Enter Your Name" name="name"> 
        <?php
        if(isset($errors['name'])){
            echo "<span style='color:red'> " . $errors['name']. "</span> <br>";
        }
        ?>
        <br>
        <label for="">Email : </label><input type="email" placeholder="Enter Your Email" name="email">
        <?php
        if(isset($errors['email'])){
            echo "<span style='color:red'> " . $errors['email']. "</span> <br>";
        }
        ?>
         <br>
        <label for="">Password : </label><input type="password" placeholder="Enter Your password" name="password"> <br>
        <label for="">Confirm Password : </label><input type="password" placeholder="Enter Your Re password" name="re_password"> <br>
        <label for="">Age : </label><input type="number" placeholder="Enter Your Age" name="age"> <br>
        <button name="submit">Submit</button>
    </form>
</body>
</html>
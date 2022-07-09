<?php

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo "Name : $name <br> Email $email";
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
    <form action="./index.php" method="GET">
        <input type="text" name="name" placeholder="Enter Name "> <br>
        <input type="email" name="email" placeholder="Enter email "> <br>
        <button>Submit</button>
    </form>
</body>
</html>


 


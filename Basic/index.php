<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="POST">
        <label for="">Name : </label><input type="text" placeholder="Enter Your Name" name="name"> <br>
        <label for="">Email : </label><input type="email" placeholder="Enter Your Email" name="email"> <br>
        <label for="">Password : </label><input type="password" placeholder="Enter Your password" name="password"> <br>
        <label for="">Confirm Password : </label><input type="password" placeholder="Enter Your Re password" name="re_password"> <br>
        <label for="">Age : </label><input type="number" placeholder="Enter Your Age" name="age"> <br>
        <label for="">Gender : </label>
        <input type="radio" value="Male" name="gender"> Male 
        <input type="radio" value="Female" name="gender"> Female <br>
        <label for="">Skills </label>
        <input type="checkbox" value="PHP" name="skills[]"> PHP 
        <input type="checkbox" value="Laravel" name="skills[]"> Laravel 
        <input type="checkbox" value="JS" name="skills[]"> JS 
        <input type="checkbox" value="Python" name="skills[]"> Python <br>
        <button name="submit">Submit</button>
    </form>
</body>
</html>
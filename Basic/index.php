<?php

if(isset($_REQUEST['submit'])){

    $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $temp_name = $_FILES['file']['tmp_name'];
    $ext = pathinfo($file,PATHINFO_EXTENSION);
    $name = time() . uniqid() . "." . $ext;
    move_uploaded_file($temp_name,"./file/$name");
    echo $temp_name;

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
       <input type="file" name="file">
        <button name="submit">Submit</button>
    </form>
</body>
</html>
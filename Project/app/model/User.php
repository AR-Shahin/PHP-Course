<?php
namespace App\model;

use Exception;

class User extends DB{

 public function store(...$data)
{
    $password = md5($data[2]);
        $sql = "INSERT INTO `users` (`id`, `name`,`email`,`password`) VALUES (NULL, '$data[0]','$data[1]','$password')";

        try {
            if ($this->con->query($sql)) {
                return true;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return false;
}
public function authenticate($email,$password){
    $password = md5($password);
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'LIMIT 1";

    $result = $this->con->query($sql);
    try {
        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            } else {
                return false;
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
}
<?php

namespace App\model;

use Exception;

class DB{
    public $con;

    private $host = "localhost:3306";
    private $userName = "root";
    private $password = "password";
    private $db_name = "php_project";

    public function __construct()
    {
        try{
            $this->con = mysqli_connect($this->host,$this->userName,$this->password,$this->db_name);
            if($this->con){
                $this->con;
            }else{
                echo "Not Connected!";
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
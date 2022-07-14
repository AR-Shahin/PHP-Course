<?php

use App\helper\Auth;
use App\helper\Session;
use App\model\User;
require "../../bootstrap/app.php";
$user = new User;
$auth = new Auth;
if($_SERVER['REQUEST_METHOD'] == "POST"){

    # Register 

    if(isset($_POST['register'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        if(empty($name) || empty($email) || empty($password)){
            Session::set("error","Field Must Not Be empty!");
            header("Location: /registration.php");
            die();
        }else{
          if( $user->store($name,$email,$password)){
            // Session::set('type',"success");
            // Session::set('alert',"Data Created Successfully!");
            header("Location: /login.php");
            die();
          }
        }
    }

    # login
    if(isset($_POST['login'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        if(!empty($email) && !empty($password)){
           $res =  $user->authenticate($email,$password);
           $auth->setAuth($res);
           if($res){
               header("Location: /");
           }
        }else{
            Session::set("error","Field Must Not Be empty!");
            header("Location: /login.php");
        }
    }

    # logout
    if(isset($_POST['logout'])){
        $auth->removeAuth();
        header("Location: /login.php");
    }
}
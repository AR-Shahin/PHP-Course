<?php

use App\helper\Session;
use App\model\Item;

require "../../bootstrap/app.php";
$item = new Item();

if($_SERVER['REQUEST_METHOD'] == "POST"){

    # Store

    if(isset($_POST['store'])){
        $title = $_POST['title'];

        if(empty($title)){
            Session::set("error","Field Must Not Be empty!");
            header("Location: /");
            die();
        }else{
            $item->store($title);
            Session::set('type',"success");
            Session::set('alert',"Data Created Successfully!");
            header("Location: /");
            die();
        }
    }

    # Delete 

    if(isset($_POST['delete'])){
        $id = $_REQUEST['id'];

        if($item->delete($id)){
            Session::set('type',"success");
            Session::set('alert',"Data Deleted Successfully!");
            header("Location: /");
            die();
        }
    }


    # Update 

    if(isset($_POST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];

        if($item->update($title,$id)){
            Session::set('type',"success");
            Session::set('alert',"Data Updated Successfully!");
            header("Location: /");
            die();
        }
    }
}
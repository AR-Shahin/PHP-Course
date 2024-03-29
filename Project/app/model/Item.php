<?php
namespace App\model;

use Exception;

class Item extends DB{

    public $items = [];
    
    public function getAllItems() : array
    {
        $sql = "SELECT * FROM items ORDER BY `id` DESC";

        $result = $this->con->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $this->items[] = $row;
            }
        }

        return $this->items;
    }

    public function store($title){
        $sql = "INSERT INTO `items` (`title`) VALUES ('$title')";

        try{
            if($this->con->query($sql)){
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


    public function delete($id)
    {
        $sql = "DELETE FROM `items` WHERE `id` = $id";

        try{
            if($this->con->query($sql)){
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


    public function show($id){
        $sql = "SELECT * FROM `items` WHERE `id` = $id";

        try{
            $res = $this->con->query($sql);
            if($res){
                $row = $res->fetch_assoc();
                return $row;
            }else{
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function update($title,$id){
        $sql = "UPDATE `items` SET `title` = '$title' WHERE `id` = $id" ;

        try{
            if($this->con->query($sql)){
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
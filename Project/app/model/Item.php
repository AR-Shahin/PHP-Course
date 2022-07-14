<?php
namespace App\model;

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
}
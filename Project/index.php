<?php

use App\model\DB;
use App\model\Item;

 include "./views/includes/header.php"; 

include "./bootstrap/app.php";

$db = new DB();
$item = new Item();
?>

<div class="container my-3">
    <h2 class="text-center">Manage Items</h2>
    <hr>
    <div class="row">
        <div class="col-md-7">
            <table class="table table-bordered text-center">
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                <?php
                    $data = $item->getAllItems();
                foreach($data as $key => $item){

                ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $item['title'] ?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">View</a>
                        <a href="" class="btn btn-sm btn-info">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="col-md-5">
            
        </div>
    </div>
</div>
<?php include "./views/includes/header.php"; ?>
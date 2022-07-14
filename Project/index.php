<?php

use App\helper\Session;
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
    <?php
        if(Session::get('alert')) { ?>
    <div class="alert alert-<?= Session::get('type')?> alert-dismissible fade show" role="alert">
        <?= Session::get('alert')?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
       <?php }
    ?>
  
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
            <h4>Create New Item</h4>
            <form action="./app/controller/ItemController.php" method="POST">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title">
                <?php
                if(!empty(Session::get('error'))){ ?>
                    <span class="text-danger"><?= Session::get('error')?></span>
              <?php  }
                ?>
                <br>
                <button name="store" class="btn btn-sm btn-success d-block">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php

Session::forget('error');
Session::forget('alert');
include "./views/includes/header.php"; 

?>
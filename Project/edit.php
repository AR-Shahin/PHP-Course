<?php

use App\helper\Session;
use App\model\DB;
use App\model\Item;

 include "./views/includes/header.php"; 

include "./bootstrap/app.php";

$db = new DB();
$item = new Item();

# Get Data 

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $id = $_REQUEST['id'];

    $data = $item->show($id);

}
?>

<div class="container my-3">
<a href="/" class="btn btn-sm btn-success">Back</a>
  
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h4>Update Item</h4>
            <form action="./app/controller/ItemController.php" method="POST">
                <label for="">Title</label>
                <input type="hidden" name="id" value="<?= $data['id']?>">
                <input type="text" class="form-control" name="title" value="<?= $data['title']?>">
                <?php
                if(!empty(Session::get('error'))){ ?>
                    <span class="text-danger"><?= Session::get('error')?></span>
              <?php  }
                ?>
                <br>
                <button name="update" class="btn btn-sm btn-success d-block">Update</button>
            </form>
        </div>
    </div>
</div>
<?php

Session::forget('error');
Session::forget('alert');
include "./views/includes/header.php"; 

?>
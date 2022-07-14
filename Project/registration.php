<?php

use App\model\DB;
use App\helper\Auth;
use App\helper\Session;


 include "./views/includes/header.php"; 

include "./bootstrap/app.php";
$auth = new Auth;
if($auth->isAuthenticate()){
    header("Location: /");
    die();
}
?>

<div class="container my-3">
<a href="/" class="btn btn-sm btn-success">Back</a>
  <h2 class="text-center">User Register</h2>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="./app/controller/AuthController.php" method="POST">
               <div class="my-2">
                <label for="">Name : </label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
               </div>
               <div class="my-2">
                <label for="">Email : </label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email">
               </div>
               <div class="my-2">
                <label for="">Password : </label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
               </div>
               <div class="my-2"> 
                <button name="register" class="btn btn-sm btn-success">Register</button>
               </div>
            </form>
        </div>
    </div>
</div>
<?php

Session::forget('error');
Session::forget('alert');
include "./views/includes/header.php"; 

?>
<?php 
session_start();
include_once 'includes/header.php';
include_once 'helper/functions.php';

if(is_authenticated()){
    header('location: index.php');
}

?>
<div class="container col-6 offset-3">
    <form method="POST" action="controller/register.php" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter your Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter your Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
       
        <button type="submit" name="user_submit_btn" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include_once 'includes/footer.php' ?>
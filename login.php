<?php
session_start();
 include_once 'includes/header.php';
 require_once 'helper/functions.php';
 ?>
<div class="container col-6 offset-3">
    <?php if(isset($_GET['error_auth'])){
        echo '<div class="alert alert-danger">
        User name or password not matched
    </div>
    ';

    }
    if(is_authenticated()){
        header('location: index.php');
        // header('location: login.php');

    }
    ?>
    
    <form method="POST" action="controller/login.php" autocomplete="off">
       
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter your Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter your Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
       
        <button type="submit" name="user_login_btn" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include_once 'includes/footer.php' ?>
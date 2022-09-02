<?php 
session_start();
include 'helper/functions.php';
$auth = $_SESSION['user'];
if(!is_authenticated()){
    header('location: login.php');
}
 ?>

<?php include_once "includes/header.php"; ?>
</main>
<div class="container col-6 offset-3">
    <h3>Create your own post here</h3><br>
    <form method="POST" action="controller/post.php" autocomplete="off" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your prefered Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter description of your title </label>
            <input type="text" class="form-control" name="description" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">chose image if its available</label>
            <input type="file" class="form-control" name="post_image" id="exampleInputPassword1">
        </div>
        <input type="hidden" class="form-control" value= "<?php echo $auth['id']; ?>" name="user_id" id="exampleInputPassword1">

       
        <button type="submit" name="post_create_btn" class="btn btn-primary">Submit</button>
    </form>
</div>



 
    
</main>  
    <?php include_once "includes/footer.php"; ?>
<?php 
session_start();
include 'helper/functions.php';
// var_dump($data['title']);
$auth = $_SESSION['user'];
if(!is_authenticated()){
    header('location: login.php');
}
if(isset($_GET['post_id'])){

    include 'core/Model.php';
    include 'core/Post.php';
    
    $post = new Post();
    $data=$post->select([],true,$_GET['post_id']);
}

 ?>

<?php include_once "includes/header.php"; ?>
</main>
<div class="container col-6 offset-3">
    <h3>Create your own post here</h3><br>
    <form method="POST" action="<?php if(isset($_GET['post_id'])) echo 'controller/updatePost.php'; else echo 'controller/post.php'  ?>" autocomplete="off" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your prefered Title</label>
            <input type="text" value="<?php if(isset($_GET['post_id'])) echo $data['title']; else echo ''; ?>" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter description of your title </label>
            <input type="text" value="<?php if(isset($_GET['post_id'])) echo $data['description']; else echo ''; ?>" class="form-control" name="description" id="exampleInputPassword1">
        </div>

        <?php
        if(isset($_GET['post_id'])){
            echo '<div class="mb-3">
            <img width="200px" src="storage/posts/'.$data['post_image'].'">
            </div>
            <input type="hidden" class="form-control" value= "'.$data['post_image'].'" name="old_post_image" id="exampleInputPassword1">
            ';
            
        }
        ?>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">chose image if its available</label>
            <input type="file" class="form-control" name="post_image" id="exampleInputPassword1">
        </div>
        <input type="hidden" class="form-control" value= "<?php echo $auth['id']; ?>" name="user_id" id="exampleInputPassword1">
        <?php if(isset($_GET['post_id'])){
            echo '<input type="hidden" class="form-control" value= "'.$data['id'].'" name="post_pk_id" id="exampleInputPassword1">';
        } ?>


       
        <button type="submit" name="<?php if(isset($_GET['post_id'])) echo'post_update_btn';else echo'post_create_btn';?>" class="btn btn-primary">Submit</button>
    </form>
</div>



 
    
</main>  
    <?php include_once "includes/footer.php"; ?>
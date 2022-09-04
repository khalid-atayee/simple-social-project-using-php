<?php
include '../core/Model.php';
include '../core/Post.php';
include '../helper/functions.php';

if(isset($_POST['post_update_btn'])){
    $data = ['title','description','post_image','user_id'];
    $data = get_data_to_array($data);
    // echo "<pre>";
    // var_dump($data);
    $post_id = $_POST['post_pk_id'];
    $old_post_image = $_POST['old_post_image'];
    // var_dump($post_image);
    $post = new Post();
    $flag = $post->update($data,$post_id);
    if($flag){
        unlink('../storage/posts/'.$old_post_image);
        if(isset($_FILES['post_image'])){
            $post_image=$_FILES['post_image'];
            $image_name = $post_image['name'];
            $image_tmp = $post_image['tmp_name'];
            $path = '../storage/posts/'.$image_name;
            move_uploaded_file($image_tmp,$path);

        }

        
    }
    header('location: ../account.php');
    // // var_dump($_POST['post_pk_id']);
   
    

}

?>
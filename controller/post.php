<?php
require_once '../helper/functions.php';
include '../core/Model.php';
include '../core/Post.php';
echo '<pre>';
//  var_dump($_POST['post_create_btn']);
if(isset($_POST['post_create_btn'])){
    // var_dump($_FILES['post_image']);
    $data = ['title','description','post_image','user_id'];
    $data = get_data_to_array($data);
    // var_dump($data);
    // var_dump ($data['file_image']);
    $post = new Post();
   $data= $post->insert($data);
//    var_dump(($data));
 
if($data){

    if(isset($_FILES['post_image'])){
        
        $image_file = $_FILES['post_image'];
        $image_tmp = $image_file['tmp_name'];
        $image_name = $image_file['name'];
        move_uploaded_file($image_tmp,'../storage/posts/'.$image_name);
  
     }
    }
    
    
}
header('location: ../index.php');

?>
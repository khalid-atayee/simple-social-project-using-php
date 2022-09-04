<?php 
session_start();
include 'helper/functions.php';
include 'core/Model.php';
include 'core/Post.php';


?>

<?php include_once "includes/header.php"; ?>
</main>

<div class="container">
<div class="row">

<?php
 $posts = new Post();
 $posts=$posts->get_data_with_users();
//  var_dump($posts);
//  $data=$post->select();

 foreach ($posts as $post) {

    echo '<div  class="col-3"><div class="card">
    <img style="width:100%;height:50%;object-fit:cover" src="storage/posts/'.$post['post_image'].'" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.$post['title'].'</h5>
      <p class="card-text">'.$post['description'].'</p>
      <span>added by '.$post['name'].' at '.$post['date'].'</span>
    </div>
  </div></div>';
 }


  ?>
</div>




 
    
</main>    
<?php include_once "includes/footer.php"; ?>


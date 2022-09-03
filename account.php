<?php 
session_start();
include 'helper/functions.php';
include 'core/Model.php';
include 'core/Post.php';

if(!is_authenticated()){
    header('location: login.php');
}
?>

<?php include_once "includes/header.php"; ?>


<main>
    <div class="container">

   
        <a href="post.php">Add new Post</a>
        <br>
        <table class="table">
            <thead>
                <tr>

                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
            <?php  
                $posts = new Post();
                $data = $posts->get_single_user_data();
                $count =1;
                foreach($data as $record){
                    echo '
                            <tr>
                            <td>'.$count++.'</td>
                            <td>'.$record['title'].'</td>
                            <td>'.$record['description'].'</td>
                            <td><img style="width:200px" src=storage/posts/'.$record['post_image'].'></td>
                            <td><a href="post.php?post_id='.$record['id'].'">Edit</a>|<a href="controller/postDelete.php?post_id='.$record['id'].'&post_image='.$record['post_image'].'">Delete</a></td>
                         
                        </tr>
                ';

                }
                // var_dump ($data);

            ?>
                
            </tbody>
        </table>
    </div>



</main>

<?php include 'includes/footer.php' ?>
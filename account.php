<?php 
session_start();
include 'helper/functions.php';
include 'core/Model.php';
include 'core/Post.php';
$auth = $_SESSION['user'];
if(!is_authenticated()){
    header('location: login.php');
}
?>

<?php include_once "includes/header.php"; ?>


<main>
    <div class="container">

    
        <a href="post.php">Add new Post</a>
        <table >
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>



</main>

<?php include 'includes/footer.php' ?>
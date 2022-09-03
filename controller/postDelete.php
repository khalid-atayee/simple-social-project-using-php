<?php
include '../core/Model.php';
include '../core/Post.php';
$post_id = $_GET['post_id'];
$post_image = $_GET['post_image'];

$post = new Post();
$post->delete($post_id,$post_image);
header('location: ../account.php');





?>
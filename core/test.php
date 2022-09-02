<?php
include 'Model.php';
include 'User.php';
include 'Post.php';
$post = new Post();
$data = ["name"=>"khalid", "email"=>"khalid@gmail.com","password"=>"12432"];
$query=$post->update($data,12);
echo $query;







?>
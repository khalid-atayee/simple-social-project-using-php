<?php
include 'Model.php';
$model = new Model();
$data = ["name"=>"khalid", "email"=>"khalid@gmail.com","password"=>"12432"];
$query=$model->update($data,2);
echo $query;







?>
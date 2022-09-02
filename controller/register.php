<?php

include '../helper/functions.php';
include '../core/Model.php';
include '../core/User.php';

if(isset($_POST['user_submit_btn'])){
    $names = ['name','email','password'];
    $data = get_data_to_array($names);
    
    $user_model = new User();
    $data['password']=md5($data['password']);
    $user_id=$user_model->insert($data);
    // echo 'recent id '.$user_id;
    header('location:../login.php');
}




?>


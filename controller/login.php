<?php
session_start();
include '../helper/functions.php';
include '../core/Model.php';
include '../core/User.php';


if(isset($_POST['user_login_btn'])){

    $names = ['email','password'];
    $data = get_data_to_array($names);
    $data['password']=md5($data['password']);
    $user = new User();
    $userData=$user->select($data,true);
    // echo '<pre>';
    // var_dump($userData);
    if($userData!=null){
        set_login_session($userData);
        header('location: ../index.php');
        
    }
    else
    {
        header('location: ../login.php?error_auth=true');
    }
}





?>
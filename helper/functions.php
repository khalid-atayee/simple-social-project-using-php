<?php
function get_data_to_array($formNames){
    $data=[];
    foreach ($formNames as $name) {
        if(isset($_FILES[$name])){
            $image_name = $_FILES[$name];
            // var_dump($image_name);
            $data[$name]=$image_name['name'];

        }
        else
        {
            $data[$name]= isset($_POST[$name])? $_POST[$name] : '';

        }
    }
    return $data;
    
    
}
function set_login_session($userData){
    $_SESSION['authenticated']=true;
    $_SESSION['user']=[
        'id'=>$userData['id'],
        'name'=>$userData['name'],
        'email'=>$userData['email']
    ];
}

function is_authenticated(){
    return isset($_SESSION['authenticated']);
}



?>
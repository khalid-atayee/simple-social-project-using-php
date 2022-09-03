<?php
 
 include_once 'helper/functions.php';
 if(isset($_SESSION['authenticated'])){

   $auth = $_SESSION['user'];
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php mini social media project</title>
    <link rel="stylesheet" href="public/style/custom.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>

        <span class="fs-4"><?php if(isset($auth)){echo 'Welcome '.$auth['name'];} else {echo 'Kindly login to be able to create Posts';}  ?> </span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
        
        <li class="nav-item"><?php if(is_authenticated()){ echo '<a href="account.php" class="nav-link">my account</a>';} else echo '<a href="login.php" class="nav-link">my account</a>'; ?></li>
  <?php
   if(!is_authenticated()){

    echo' <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
     <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';
  } 
  ?>
       <?php if(is_authenticated()){echo '<li class="nav-item"><a href="controller/logout.php" class="nav-link">Logout</a></li>';} ?> 
      </ul>
    </header>
  </div>
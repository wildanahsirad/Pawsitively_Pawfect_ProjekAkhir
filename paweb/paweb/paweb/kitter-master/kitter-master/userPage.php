<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:FormLogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

   <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

   <link rel="stylesheet" href="./assets/css/stylelogin.css">

   <style>
      body {
         background: url('./assets/images/hero-banner.jpg') center/cover no-repeat; 
         margin: 0;
         padding: 0;
         font-family: 'Arial', sans-serif;
      }

      .container {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
      }

      .content {
         text-align: center;
         padding: 20px;
         background: rgba(255, 255, 255, 0.8);
         border-radius: 10px;
      }

      
   </style>
</head>
<body>

<div class="container">
   <div class="content">
      <h3>Hallo, <span>Selamat Datang di Pawfect</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Silahkan klik Shop untuk belanja^^</p>
      <a href="products.php" class="btn">Shop</a>
      <a href="index2.php" class="btn">Menu Utama</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>
</div>

</body>
</html>

<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:FormLogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>

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
      <h3>Halloo, <span>Admin</span></h3>
      <h1>Irasshaimase <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Ini page Admin</p>
      <a href="admin.php" class="btn">Menu Admin</a>
      <a href="index3.php" class="btn">Halaman Utama</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>
</div>

</body>
</html>
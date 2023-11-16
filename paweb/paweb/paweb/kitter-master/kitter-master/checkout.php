<?php

@include 'config.php';


if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = $product_item['price'] * $product_item['quantity'];
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>terima kasih sudah berbelanja!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            
         </div>
            <a href='products.php' class='btn'>kembali ke menu produk</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./assets/css/styles.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Checkout</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>keranjangmu masih kosong!</span></div>";
      }
      ?>
      <span class="grand-total"> Total : Rp.<?= $grand_total; ?>/- </span>
   </div>

   <div class="flex">
         <div class="inputBox">
            <span>Nama</span>
            <input type="text" placeholder="Masukkan Nama" name="name" required>
         </div>
         <div class="inputBox">
            <span>No.Telp</span>
            <input type="number" placeholder="Masukkan No Telp" name="number" required>
         </div>
         <div class="inputBox">
            <span>email</span>
            <input type="email" placeholder="Masukkan email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Metode Pembayaran</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on devlivery (COD)</option>
               <option value="credit cart">Kartu Kredit</option>
               <option value="Qris">Qris</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Alamat </span>
            <input type="text" placeholder="ex. samarinda utara" name="alamat1" required>
         </div>
         <div class="inputBox">
            <span>Jalan</span>
            <input type="text" placeholder="ex. Pm noor " name="jalan" required>
         </div>
         <div class="inputBox">
            <span>Kabupaten/Kota</span>
            <input type="text" placeholder="ex. samarinda" name="city" required>
         </div>
         <div class="inputBox">
            <span>Jalan</span>
            <input type="text" placeholder="ex. maharashtra" name="state" required>
         </div>
         <div class="inputBox">
            <span>Negara</span>
            <input type="text" placeholder="ex. indonesia" name="country" required>
         </div>
         <div class="inputBox">
            <span>Kode Pos</span>
            <input type="text" placeholder="ex. 123456" name="pin_code" required>
         </div>
      <input type="submit" value="Pesan sekarang" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="./assets/js/scripts.js"></script>
   
</body>
</html>

<header class="header">

   <div class="flex">

      <a href="#" class="logo">Pawfect</a>

      <nav class="navbar">
         <!-- <a href="admin.php">Tambah Produk</a> -->
         <!-- <a href="products.php">Lihat Produk</a> -->
         <a href="index2.php">Menu Utama</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">keranjang <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>
      
   </div>

</header>
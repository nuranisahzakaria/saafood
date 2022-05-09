<?php
    session_start();

    // mendapatkan id produk dari url
    $produk = $_GET ['id'];

   if (isset($_SESSION['keranjang'][$produk])){
    $_SESSION['keranjang'][$produk] +=1;
   } else{
     $_SESSION['keranjang'][$produk] = 1;
   }

   echo"<script>alert('Makanan telah masuk ke keranjang pesanan')</script>";
   echo"<script>location='keranjang.php'</script>";
?>
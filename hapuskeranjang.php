<?php
    session_start();
    $produk = $_GET["id"];
    unset($_SESSION['keranjang'][$produk]);

    echo "<script>alert('Pesanan dihapus dari keranjang')</script>";
	echo "<script>location='keranjang.php'</script>";
?>
<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_addres FROM  db_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
	$produk = mysqli_query($conn, "SELECT * FROM dp_product WHERE product_id = '".$_GET['id']."' ");
	$p =  mysqli_fetch_object($produk);
?>
</html><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<title>Muslimah Style | Stylon.com</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <link href="footers.css" rel="stylesheet">


</head>
<body>
<!-------------------- HEADER ------------------------>
	<header>
		<div class="busanas">
            <ul>
                <li><a href="busana.php">BUSANA</a></li>
                <li><a href="hijab.php">HIJAB</a></li>
                <li><a href="aksesoris.php">AKSESORIS</a></li>
				<li><a href="index.php"><img src="img/ikon.png" width="350px" top="0" class="logo"></li>
                <li><a href="login-user.php"><img src="img/ikon-user.png" width="20px" class="ikon"></a></li>
                <li><a href="search.php"><img src="img/ikon-search.png" width="20px" class="ikon"></a></li>
            </ul>
        </div>
    </header>

<!--DETAIL-->
<div class="section">
	<div class="container">
		<h3>Detail Produk</h3>
		<div class="box">
			<div class="coldua">
				<img src="produk/<?php echo $p->product_images ?>" width="95%">
			</div>

			<div class="coldua">
				<h3><?php echo $p->product_name ?></h3>
				<h4 class="harga">Rp. <?php echo number_format($p->product_price); ?></h4>
				<p><?php echo $p->product_description; ?></p>
				<div class="pemesanan">
					<a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text-Halo admin, saya mau pesan dengan produk ini min." target="_blank"><span class="order-1">PESAN</span></a>

				</div>
			</div>
		</div>
	</div>	
</div>

    <!-------------------footer -------------------->
    <div class="footerdetail">
        <footer>
            <div class="container">
                <small>Copyright &copy; 2021 - Stylon.com, By Nur Anisah</small>
            </div>
        </footer>
        <script>
                CKEDITOR.replace( 'deskripsi' );
        </script>
    </div>
	</body>
</html>
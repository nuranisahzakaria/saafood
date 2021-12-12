<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_addres FROM  db_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
</html><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<title>Pesan-Antar Makanan | Safood</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/image-slider.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

		<!-- Bootstrap core CSS -->
	<link href="bootstrap-5.1/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 

	<!-----------------CSS FOOTER ------------------>
	    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
		.cari{
			padding-top: 90px;
		}
    </style>


    <!-- Custom styles for this template -->
    <link href="footers.css" rel="stylesheet">


</head>
<body>

<!-------------------- HEADER ------------------------>
<header>
        <div class="busanas">
            <ul>
                <li><a href="index.php"><img src="img/ikon.png" width="230px" top="0" class="logo"></li>
                <li class="logo-kanan"><a href="#"><img src="img/ig.jpg" width="21px" class="ikon"></a></li>
                <li><a href="#"><img src="img/fb.png" width="21px" class="ikon"></a></li>
            </ul>
        </div>
    </header>
	
<!--search-->
<div class="cari">
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari" class="tambahs">
			</form>
		</div>
</div>

<!--new produk-->
<div class="section">
	<div class="container">
		<div class="box">
			<?php 
				$produk = mysqli_query($conn, "SELECT * FROM dp_product WHERE product_status = 1 ORDER BY product_id DESC 
				");
				if(mysqli_num_rows($produk) > 0){
					while($p = mysqli_fetch_array($produk)){
			?>
			<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
			<div class="colempat">
				<img src="produk/<?php echo $p['product_images'] ?>">
				<p class="nama"><?php echo substr($p['product_name'], 0, 30)  ?></p>
				<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
			</div>
			</a>
		<?php } } else { ?>
			<p>Produk tidak Ada</p>
		<?php } ?>
		</div>
	</div>
</div>


<!-------------------footer -------------------->

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>&copy; 2021 Nur Anisah, All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
        </div>
            </div>
        </footer>
    </div>

    </div>
</body>
</html>
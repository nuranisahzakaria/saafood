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
	<title>Pesan-Antar Makanan | Safood</title>
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
                <li><a href="index.php"><img src="img/ikon.png" width="230px" top="0" class="logo"></li>
                <li class="logo-kanan"><a href="#"><img src="img/ig.jpg" width="21px" class="ikon"></a></li>
                <li><a href="#"><img src="img/fb.png" width="21px" class="ikon"></a></li>
            </ul>
        </div>
    </header>

<!--DETAIL-->
<div class="detailatas">
	<div class="section">
		<div class="container">
			<h7>Detail Makanan</h7>
			<div class="box">
				<div class="coldua">
					<img src="produk/<?php echo $p->product_images ?>" width="95%">
				</div>

				<div class="coldua">
					<h3><?php echo $p->product_name ?></h3>
					<h4 class="harga">Rp. <?php echo number_format($p->product_price); ?></h4>
					<p><?php echo $p->product_description; ?></p>

						<div class="tabeljam">
							<p class="p">Jam Operasional</p>
							<table>
								<thead class="jam">
									<th>Minggu</th>
									<th>Senin</th>
									<th>Selasa</th>
									<th>Rabu</th>
									<th>Kamis</th>
									<th>Jumat</th>
									<th>Sabtu</th>
								</thead>
								<tbody>
									<td> 10:00-22:00 </td>
									<td> 10:00-22:00 </td>
									<td> 10:00-22:00 </td>
									<td> 10:00-22:00 </td>
									<td> 10:00-22:00 </td>
									<td> 10:00-22:00 </td>
									<td> 10:00-22:00 </td>
								</tbody>
							</table>
						</div>

						<div class="pemesanan">
							<a href="pesan.php?id=<?php echo $p->product_id ?>"><span class="order-1">PESAN</span></a>

					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

    <!-------------------footer -------------------->
    <div class="footerdetail">
        <footer>
            <div class="container">
                <small>Copyright &copy; 2021 - Safood.com, By Nur Anisah</small>
            </div>
        </footer>
        <script>
                CKEDITOR.replace( 'deskripsi' );
        </script>
    </div>
	</body>
</html>
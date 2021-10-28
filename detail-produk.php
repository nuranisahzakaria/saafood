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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
</head>
<body>
	<!-------------------- HEADER ------------------------>
	<header>
		<div class="busanas">
            <ul>
                <li><a href="">BUSANA</a></li>
                <li><a href="#">HIJAB</a></li>
                <li><a href="#">AKSESORIS</a></li>
				<li><img src="img/ikon.png" width="350px" top="0" class="logo"></li>
				<li><a href="#"><img src="img/ikon-user.png" width="20px" class="ikon"></a></li>
                <li><a href="#"><img src="img/ikon-login.png" width="20px" class="ikon"></a></li>
                <li><a href="#"><img src="img/ikon-search.png" width="20px" class="ikon"></a></li>
            </ul>
        </div>
    </header>
<!-- <div class="search">
	<div class="container">
		<form action="produk.php">
			<input type="text" name="search" placeholder="Cari Produk" value=" <?php echo $_GET['search'] ?>">
			<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
			<input type="submit" name="cari" value="Cari">
		</form>
	</div>
</div> -->

<!--DETAIL-->
<div class="section">
	<div class="container">
		<h3>Detail Produk</h3>
		<div class="box">
			<div class="coldua">
				<img src="produk/<?php echo $p->product_images ?>" width="100%">
			</div>

			<div class="coldua">
				<h3><?php echo $p->product_name ?></h3>
				<h4 class="harga">Rp. <?php echo number_format($p->product_price); ?></h4>
				<p><?php echo $p->product_description; ?></p>
				<p class="Pesan">
				<a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text-Hai, saya tertarik dengan produk Anda." target="_blank"><img src="img/ikon_wa.png" width=20px">
						<span>Pesan Sekarang</span>
						</a>
				</p>
			</div>
		</div>
	</div>	
</div>

    <footer>
      <div class="footer">
  <div class="footer-logo">Stylon.com</div>

      <div class="footer-list">
        <h4>Alamat</h4>
        	<p><?php echo $a->admin_addres ?></p>
          <h4>Email</h4>
          <p><?php echo $a->admin_email ?></p>
          <h4>Nomor HP</h4>
          <p><?php echo $a->admin_telp ?></p>
          <small class="foot">Copyright &copy; 2021 - Stylon.com, By Nur Anisah</small>
        </ul>
      </div>
          </div>
</footer>
</body>
</html>
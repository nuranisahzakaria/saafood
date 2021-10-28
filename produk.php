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
<!--search-->
<div class="search">
	<div class="container">
		<form action="produk.php">
			<input type="text" name="search" placeholder="Cari Produk" value=" <?php echo $_GET['search'] ?>">
			<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
			<input type="submit" name="cari" value="Cari">
		</form>
	</div>

<!--new produk-->
<div class="section">
	<div class="container">
		<h3>Produk</h3>
		<div class="box">
			<?php 
			if($_GET['search'] != '' || $_GET['kat'] != ''){
				$where = "AND product_name LIKE '%".$_GET['search']."%' AND category_id LIKE '%".$_GET['kat']."%' ";
			}
				$produk = mysqli_query($conn, "SELECT * FROM dp_product WHERE product_status = 1 $where ORDER BY product_id DESC");
				if(mysqli_num_rows($produk) > 0){
					while($p = mysqli_fetch_array($produk)){
			?>
			<a href="detail-produk.php?id<?php echo $p['product_id'] ?>">
			<div class="colempat">
				<img src="produk/<?php echo $p['product_images'] ?>">
				<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
				<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
			</div>
			</a>
		<?php } } else { ?>
			<p>Produk tidak Ada</p>
		<?php } ?>
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
</footer>
    </div>
</body>
</html>
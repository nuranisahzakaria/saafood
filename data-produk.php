<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
	$produk = mysqli_query($conn, "SELECT * FROM dp_product LEFT JOIN db_category USING (category_id) ORDER BY product_id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<title>Pesan-Antar Makanan | Safood</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
</head>
<body><!-- header-->
	<header>
		<div class="container">
		<h1><a href="dashboard.php">Safood</a></h1>
		<ul>
			<div class="container">
			
			<li><a href="keluar.php" onClick="return confirm('Keluar dari Halaman Admin')">Keluar</a></li>
			<li><a href="data-produk.php">Data Makanan</a></li>
			<li><a href="data-kategori.php">Data Restoran</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="dashboard.php">Dashboard</a></li>
			</div>
		</ul>
	</div>
	</header>
<!-- content-->
		<div class="section">
			<div class="container">
				<h3 class="judul1">Data Makanan</h3>
				<a href="tambah-produk.php">
				<div class="box">
					<p>
						<div class="buton-tambah">
							Tambah Makanan
						</div>
					</p>
					</a>
					<table border="1" cellspacing="0" class="table">
						<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th>Nama Makanan</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Aksi</th>
						</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								
								if(mysqli_num_rows($produk) > 0){
								while ($row = mysqli_fetch_array($produk)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $row['category_name'] ?></td>
								<td><?php echo $row['product_name'] ?></td>
								<td>Rp. <?php echo number_format ($row['product_price']) ?></td>
								<td><a href="produk/<?php echo $row['product_images'] ?>" target="_blank"><img src="produk/<?php echo $row['product_images'] ?>" width="50px"></td>
								<td><?php echo $row['product_status'] == 0? 'Tidak Aktif':'Aktif';?></td>
								<td>
									<a href="edit-produk.php?id=<?php echo $row ['product_id']?>">Edit</a> || <a href="hapus.php?idp=<?php echo $row ['product_id']?>" onclick="return confirm('1 item akan dihapus')">Hapus</a>
								</td>
							</tr>
							<?php }  } else { ?>
								<tr>
									<td colspan="7">Tidak ada data</td>
								</tr>
							<?php } ?>

							
						</tbody>
					</table>
				</div>
			</div>
		</div>

<!-- footer-->
<footer>
	<div class="container">
		<small>Copyright &copy; 2021 - Safood.com, By Nur Anisah</small>
	</div>
</footer>
</body>
</html>
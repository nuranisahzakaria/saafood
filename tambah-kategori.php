<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
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
				<h3>Tambah Restoran</h3>
				<div class="box">
					<form action="" method="POST">
						<input type="text" name="nama" placeholder="Nama Restoran" class="input-control" required>
						<input type="submit" name="submit" value="Tambah" class="btn">
					</form>
					<?php 
						if(isset($_POST['submit'])){
							$nama = ucwords($_POST['nama']);

							$insert = mysqli_query($conn, "INSERT INTO db_category VALUES (
												null,
												'".$nama."') ");
							if($insert){
								echo '<script>alert("Tambah Data Berhasil")</script>';
								echo '<script>window.location="data-kategori.php"</script>';
							}else {
								echo 'Gagal'.mysqli_error($conn);
							}
						}
					?>	
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
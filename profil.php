<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$query = mysqli_query($conn, "SELECT * FROM db_admin WHERE admin_id= '".$_SESSION['id']."' ");
	$d = mysqli_fetch_object($query);
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
			<li><a href="data-produk.php">Data Produk</a></li>
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
				<h3>Profil</h3>
				<div class="box">
					<form action="" method="POST">
						<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
						<input type="text" name="user" placeholder="Usename" class="input-control" value="<?php echo $d->username ?>" required>
						<input type="text" name="hp" placeholder="Nomor HP" class="input-control" value="<?php echo $d->admin_telp ?>" required>
						<input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>" required>
						<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_addres ?>" required>
						<input type="submit" name="submit" value="Ubah Profil" class="btn">
					</form>
					<?php 
						if(isset($_POST['submit'])){
							$nama = $_POST['nama'];
							$user = $_POST['user'];
							$hp = $_POST['hp'];
							$email = $_POST['email'];
							$alamat = $_POST['alamat'];

							$update = mysqli_query($conn, "UPDATE db_admin SET
											admin_name = '".$nama."',
											username = '".$user."',
											admin_telp = '".$hp."',
											admin_email = '".$email."',
											admin_addres = '".$alamat."'
											WHERE admin_id = '".$d->admin_id."' ");
							if($update){
								echo '<script>alert("Ubah data berhasil")</script>';
								echo '<script>window.location="profil.php"</script>';
							}else{
								'gagal'.mysqli_error($conn);
							}
						}
					?>
				</div>


				<h3>Ubah Password</h3>
				<div class="box">
					<form action="" method="POST">
						<input type="password" name="pass1" placeholder="Password baru" class="input-control"  required>
						<input type="password" name="pass2" placeholder="Konfirmasi password" class="input-control" required>
						<input type="submit" name="ubah_password" value="Ubah Password" class="btn">
					</form>
					<?php 
						if(isset($_POST['ubah_password'])){
							$pass1 = $_POST['pass1'];
							$pass2 = $_POST['pass2'];

							if($pass2 != $pass1){
								echo '<script>alert("Konfirmasi Password Tidak Sesuai")</script>';
							}else{
							$ubah_pass = mysqli_query($conn, "UPDATE db_admin SET
											password = '".MD5($pass1)."'
											WHERE admin_id = '".$d->admin_id."' ");
								if($ubah_pass){
											echo '<script>alert("Ubah Password Berhasil")</script>';
											echo '<script>window.location="profil.php"</script>';
								}else{
								'gagal'.mysqli_error($conn);
								}
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
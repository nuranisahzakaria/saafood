<?php 
	session_start();
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_addres FROM  db_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">
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

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="footers.css" rel="stylesheet">
	<style>
		.btn-primary{
			margin-top: 35px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h11 class="wkwkwk">Login Pelanggan</h11>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="Email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button class="btn btn-primary" name="simpan">Masuk</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
		if (isset($_POST["simpan"])){
			$email = $_POST["email"];
			$password = $_POST["password"];
			$conn->query("SELECT*FROM pelanggan
			WHERE email_pelanggan='email' AND password_pelanggan='password'");

			$akunyangcocok = $ambil->num_rows;

			if ($akunyangcocok ==1){
				$akun = $ambil -> fetch_assoc();
				$_SESSION['pelanggan'] = $akun;
				echo "<script>alert('Login sukses')</script>";
				echo "<script>location='checkout.php'</script>";
			} else{
				echo "<script>alert('Periksa kembali email dan passward anda')</script>";
				echo "<script>location='login-user.php'</script>";
			}
		}
	?>
</body>
</html>
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

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">

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
        .container {
            margin-top: 140px;
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

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class=" panel panel-default">
                    <h7 margin-bottom="45px">Daftar Pelanggan</h7>
                    <div class="panel body">
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama</label>
                            </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                            </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-md-3">Password</label>
                            </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-md-3">Alamat</label>
                            </div>
                                <div class="col-md-7">
                                    <textarea name="alamat" id="" cols="45" rows="10" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Telp/HP</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="telp" required>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-7" margin-top="20px">
                                        <button class="btn btn-primary" name="daftar">Daftar</button>
                                    </div>
                                </div>
                        </form>
                        <?php 
                            if (isset($_POST["daftar"])){
                                $nama = $_POST["nama"];
                                $email = $_POST["email"];
                                $password= $_POST["password"];
                                $alamat = $_POST["alamat"];
                                $telp = $_POST["telp"];

                                // validasi email
                                $ambil = $conn->query("SELECT*FROM pelanggan WHERE email_pelanggan='$email'");
                                $yangcocok = $ambil->num_rows;
                                if ($yangcocok==1){
                                    echo "<script>alert('Email sudah digunakan')</script>";
                                    echo "<script>location='daftar.php'</script>";
                                } else {
                                    $conn->query("INSERT INTO pelanggan (email_pelanggan, password_pelanggan, nama_pelanggan
                                    telepon_pelanggan, alamat_pelanggan)
                                    VALUES '$email', '$password', '$nama', '$telepon', '$alamat'");
                                    echo "<script>alert('Pendaftaran Sukses')</script>";
                                    echo "<script>location='checkout.php'</script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
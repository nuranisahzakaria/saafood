<?php
    session_start();
    include 'db.php';
    if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])){
        echo "<script>alert('Keranjang pesanan kosong, Silakan lakukan pemesanan terlebih dahulu')</script>";
        echo "<script>location='index.php'</script>";
    }
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_addres FROM  db_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
	$produk = mysqli_query($conn, "SELECT * FROM dp_product WHERE product_id = '".$_GET['id']."' ");
	$p =  mysqli_fetch_object($produk);
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
<br><br><br><br>
    <section class="kontent">
        <div class="container">
            <h11>Keranjang Pesanan</h11>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pesanan</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subharga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1?>
                    <?php $totalbelanja = 0; ?>
                    <?php foreach ($_SESSION["keranjang"] as $produk => $jumlah):?>
                        <!-- Menampilkan produk berdasarkam id -->
                        <?php
                            $ambil = $conn->query("SELECT * FROM dp_product
                            WHERE product_id =$produk"); 
                            $pecah = $ambil->fetch_assoc();
                            $subharga = $pecah["product_price"]*$jumlah;
                        
                        ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['product_name'];?></td>
                        <td><img src="produk/<?php echo $pecah['product_images'] ?>" width="150px"></td>
                        <td>Rp.<?php echo number_format($pecah['product_price']);?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>Rp.<?php echo number_format($subharga); ?></td>
                        <td>
                            <a href="hapuskeranjang.php?id=<?php echo $produk?>" class="btn btn-danger btn-xs">Hapus</a>
                        </td>                    
                    </tr>
                    <?php $nomor++ ?>
                    <?php $totalbelanja+=$subharga; ?>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">Total Belanja</th>
                        <th>Rp. <?php echo number_format($totalbelanja)?></th>
                    </tr>
                </tfoot>
            </table>
            <br>
            <a href="index.php" class="btn btn-default">Tambah Makanan</a>
            <a href="checkout.php" class="btn btn-primary">Cetak Pemesanan</a>
            <a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text-Halo admin, saya mau pesan menu ini" 
            target="_blank" class="btn btn-primary">Pesan Melalui Whatsapp</a>
            <pre>
                <br>
                <br>
                <br><br><br>
            </pre>
        </div>
    </section>
</body>
</html>
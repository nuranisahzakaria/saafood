<?php 
	include 'db.php';

	if(isset($_GET['idk'])){
		$delete = mysqli_query($conn, "DELETE FROM db_category WHERE category_id = '".$_GET['idk']."' ");
		echo '<script>window.location="data-kategori.php"</script>';
	}
	if(isset($_GET['idp'])){
		$produk = mysqli_query($conn, "SELECT product_images FROM dp_product WHERE product_id='".$_GET['idp']."' ");
		$p = mysqli_fetch_object($produk);

		unlink("./produk/".$p->product_images);
		$delete = mysqli_query($conn, "DELETE FROM dp_product WHERE product_id = '".$_GET['idp']."' ");
		echo '<script>window.location="data-produk.php"</script>';
	}
?>
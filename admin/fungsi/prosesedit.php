<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['edittipe'];
$jumlah = $_POST['editjumlah'];
$harga = $_POST['editharga'];
$gambar = $_FILES['editgambar']['name'];

move_uploaded_file($_FILES['editgambar']['tmp_name'],"../../simpangambar/".$gambar);

	if(empty($gambar)) {
		$update = $pdo->query("UPDATE kamar SET idkamar='$id', tipe='$tipe', jumlah='$jumlah', harga='$harga' WHERE idkamar='$id'");
		$update2 = $pdo->query("UPDATE stokkamar SET idkamar='$id', tipe='$tipe' WHERE idkamar='$id'");

		echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
	}
	elseif (!empty($gambar)) {
		$update = $pdo->query("UPDATE kamar SET idkamar='$id', tipe='$tipe', jumlah='$jumlah', harga='$harga', gambar='$gambar' WHERE idkamar='$id'");
		$update2 = $pdo->query("UPDATE stokkamar SET idkamar='$id', tipe='$tipe' WHERE idkamar='$id'");
		
		echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
}

?>

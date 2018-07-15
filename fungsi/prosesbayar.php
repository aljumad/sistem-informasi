<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../lib/sweet.js"></script>
</head>
<body>

<?php
include"koneksi.php";
$idpesan = $_POST['txtid'];
$nama = $_POST['txtnama'];
$jumlah = $_POST['txtjumlah'];
$bank = $_POST['txtbank'];
$norek = $_POST['txtnorek'];
$namarek = $_POST['txtnamarek'];
$gambar = $_FILES['txtgambar']['name'];

$sqlsimpan = $pdo->query("INSERT INTO pembayaran VALUES('$idpesan', '$nama', '$jumlah', '$bank', '$norek', '$namarek', '$gambar')");

move_uploaded_file($_FILES['txtgambar']['tmp_name'],"../simpangambar/".$_FILES['txtgambar']['name']);

echo"<script>swal({
	  	type: 'success',
	  	title: 'Konfirmasi Pembayaran Terkirim!',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(0,0,123,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../user/datapesanan');
 		} ,1500);</script>";
?>

</body>
</html>
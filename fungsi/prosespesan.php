<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../lib/sweet.js"></script>
</head>
<body>

<?php
include"koneksi.php";
$tglpesan = $_POST['tglpesan'];
$jamexpire = $_POST['jamexpire'];
$idkamar = $_POST['idkamar'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$jum = $_POST['jum'];
$idtamu = $_POST['idtamu'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$tglcekin = $_POST['tglcekin'];
$tglcekout = $_POST['tglcekout'];
$lama = $_POST['lama'];
$total = $_POST['total'];

$sqlsimpan = $pdo->query("INSERT INTO pemesanan VALUES('', '$tglpesan', '$jamexpire', '$idkamar', '$tipe', '$harga', '$jum', '$idtamu', '$nama', '$alamat', '$telepon', '$tglcekin', '$tglcekout', '$lama', '$total', 'Pending...')");

$sqlstok = $pdo->query("SELECT * FROM stokkamar WHERE idkamar=$idkamar");
	$datax = $sqlstok->fetch();
	$stok = $datax['stok'];
	$hitung = $stok - $jum;
	$sqlupdate = $pdo->query("UPDATE stokkamar SET stok='$hitung' WHERE idkamar='$idkamar'");

echo"<script>swal({
	  	type: 'success',
	  	title: 'Pemesanan Kamar Terkirim',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(0,0,123,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../user/datapesanan');
 		} ,1500);</script>";
?>

</body>
</html>
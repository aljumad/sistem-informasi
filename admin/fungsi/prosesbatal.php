<?php
include"koneksi.php";
$ambil = $_GET['id'];

$sql = $pdo->query("SELECT * FROM pemesanan WHERE idpesan=$ambil");
while($data = $sql->fetch()) {
	$idpesan = $data['idpesan'];

$sqlupdate = $pdo->query("UPDATE pemesanan SET status='Dibatalkan' WHERE idpesan=$idpesan");
echo"<script>alert('Transaksi Dibatalkan!');document.location.href='../transaksibatal';</script>";
}
?>

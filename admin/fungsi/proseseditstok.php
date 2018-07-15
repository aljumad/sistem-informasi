<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['edittipe'];
$stok = $_POST['editstok'];

$update = $pdo->query("UPDATE stokkamar SET idkamar='$id', tipe='$tipe', stok='$stok' WHERE idkamar='$id'");
echo "<script>alert ('Stok Kamar telah diupdate');document.location.href='../stokkamar';</script>";

?>

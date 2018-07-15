<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];

$sqlsimpan = $pdo->query("INSERT INTO kamar VALUES('$id', '$tipe', '$jumlah', '$harga', '$gambar')");
$sqlsimpan2 = $pdo->query("INSERT INTO stokkamar VALUES('$id', '$tipe', '$jumlah')");

move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$_FILES['gambar']['name']);
echo"<script>alert('Data Kamar Tersimpan');document,location.href='../datakamar';</script>";
?>
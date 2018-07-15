<?php
include"koneksi.php";
$ambil = $_GET['id'];
$sql = $pdo->query("DELETE FROM stokkamar WHERE idkamar='$ambil'");
echo"<script>document.location.href='../stokkamar';</script>";
?>
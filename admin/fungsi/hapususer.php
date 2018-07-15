<?php
include"koneksi.php";
$ambil = $_GET['id'];
$sql = $pdo->query("DELETE FROM tamu WHERE idtamu='$ambil'");
echo"<script>document.location.href='../datauser';</script>";
?>
<?php
	include"koneksi.php";
	session_start();
	unset($_SESSION['ceklog']);
	header('Location: ../');
?>
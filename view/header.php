<?php
    session_start();
	require_once "fungsi/koneksi.php";
    if(isset($_SESSION['user'])) {
        echo "<script>window.location.replace('user/')</script>";
    }
    else {
        unset($_SESSION['user']);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Pemesanan Kamar Pada Hotel Horison Kendari</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="lib/sweet.js"></script>
	<style type="text/css">
		
		
	</style>
</head>
<body>

	<nav>
		<img src="gambar/horisonkdi.png" width="200px">
		<ul>
			<li><a href="index">Beranda</a></li>
			<li><a href="kamar">Kamar</a></li>
			<li><a href="fasilitas">Fasilitas</a></li>
			<li><a href="daftar">Daftar</a></li>
			<li><a href="login">Login</a></li>
			
		</ul>
	</nav>

	<main>
		<center>
		<!-- <div id="log-in">
		  <div class="isi_popup2">
			
			<center>
			<li>Silahkan Login</li>
			<form method="POST" action="index">
				<table align="center">
					<tr>
					<td>Email</td>
					<td><input type="Email" name="email" required="required" placeholder="Email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" required="required" placeholder="Kata Sandi"></td>
				</tr>
				</table>
						<a href="index"><button type="submit" name="submit" id="tomboll" style="width: 63px;">Login</button></a>
							<a href="#" style="background-color:#000;color:white;font-weight:bold;border:2px solid white;padding: 8px; text-decoration: none;">Batal</a>
				</form>
				</center>
			</div>
		</div> -->

			
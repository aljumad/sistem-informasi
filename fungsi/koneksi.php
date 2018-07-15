<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "sisfohotel";
	$url = 'mysql:host=localhost;dbname=sisfohotel';
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
	//mysql_connect($host, $user, $pass) or die("Koneksi Gagal");
	//mysql_select_db($database) or die("Database Empty");
	//$mysqli = new mysqli($host, $user, $pass, $database) or die("Koneksi Gagal");
	try {
		$pdo = new PDO($url, $user, $pass, $options);
		$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  		// hapus koneksi
  		$dbh = null;
	}
	catch (PDOException $e) {
	  // tampilkan pesan kesalahan jika koneksi gagal
	  print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
	  die();
	}

?>

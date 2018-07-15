<?php
	session_start();
	require_once "../fungsi/koneksi.php";

	if(!isset($_SESSION['user'])){
		//unset($_SESSION['user']);
		//echo "<script>window.location.replace('../fungsi/load.php')</script>";
?>
		<html>
		<head>
		<title></title>
		<script type="text/javascript" src="../lib/sweet.js"></script>
		</head>
		<body>
			<script>
				swal({
			  		title: 'Oops...?',
			  		text: 'Silahkan Login Terlebih Dahulu!',
			  		showConfirmButton: false,
			  		type: 'warning',
			  		backdrop: 'rgba(123,0,0,1)',
				});
				window.setTimeout(function(){
					window.location.replace('../');
		 		} ,2000); 
		 	</script>;
		</body>
		</html>
<?php
	}		

		$ambil = $_SESSION['user'];
		$sql = $pdo->query("SELECT * FROM tamu WHERE idtamu='$ambil'");
		$data = $sql->fetch();
		$id = $data['idtamu'];
		$username = $data['username'];
		$email = $data['email'];
		$alamat = $data['alamat'];
		$telepon = $data['telepon'];
		$password = $data['password'];
		$nama = $data['nama'];
		$foto = $data['foto'];

		$bts = 22;
		$nmak = strlen($nama);
		if($nmak > $bts) {
			$nm = substr($nama, 0, $bts) . '...';
		}
		else {
			$nm = $nama;
		}
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Pemesanan Kamar Pada Hotel Horison Kendari</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">
	<script type="text/javascript" src="../lib/sweet.js"></script>
</head>
<body>
	<nav>
			<img src="../gambar/horisonkdi.png" width="200px"> <span style="float: right; margin-right: 80px;"><center><img src="../simpangambar/<?php 
				if ($foto != '') {
					echo $foto;
				}
				else {
					echo 'profil.png';
				}
			?>" width="47px" height="47px"><p style="text-transform:uppercase;font-weight: bold;color: white;">&nbsp;&nbsp;<?php echo $nama; ?></p><li style="list-style: none;float: left;"><a href="profil" id="tomboll" style="padding:3px;border:1px solid white;">Profil</a></li>
				<li style="list-style: none;float: left;"><a href="../fungsi/proseskeluar.php" id="tombol2" style="padding:3px;border:1px solid white;">Keluar</a></li></center></span>
			<ul>
				<li><a href="index">Beranda</a></li>
				<li><a href="kamar">Kamar</a></li>
				<li><a href="fasilitas">Fasilitas</a></li>
				<li><a href="datapesanan">Data Reservasi</a></li>
				<li><a href="kontak">Kontak</a></li>
				
			</ul>
	</nav>
	
	<main>
		<center>




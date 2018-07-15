<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../lib/sweet.js"></script>
</head>
<body>

<?php
include"koneksi.php";
$id = $_POST['tid'];
$username = $_POST['tuser'];
$email = $_POST['temail'];
$nama = $_POST['tnama'];
$alamat = $_POST['talamat'];
$telepon = $_POST['ttelepon'];
$foto = $_FILES['tfoto']['name'];

move_uploaded_file($_FILES['tfoto']['tmp_name'],"../simpangambar/".$foto);

	if(empty($foto)) {
		$update = $pdo->query("UPDATE tamu SET username='$username', email='$email', nama='$nama', alamat='$alamat', telepon='$telepon' WHERE idtamu='$id'");
echo "<script>swal({
	  	type: 'success',
	  	title: 'Profil Diperbaharui',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(0,0,123,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../user/profil');
 		} ,1500);</script>";
	}
	elseif (!empty($foto)) {
		$update = $pdo->query("UPDATE tamu SET username='$username', email='$email', nama='$nama', alamat='$alamat', telepon='$telepon', foto='$foto' WHERE idtamu='$id'");
echo "<script>swal({
	  	type: 'success',
	  	title: 'Profil Diperbaharui!',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(0,0,123,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../user/profil');
 		} ,1500);</script>";
}

?>
</body>
</html>
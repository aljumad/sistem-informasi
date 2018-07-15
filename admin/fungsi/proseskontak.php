

<?php
include "koneksi.php";
if (isset($_POST['ok'])) {
$ambil = $_POST['txtid'];
$teks = $_POST['tekss'];

$sql = $pdo->query("SELECT * FROM tamu WHERE idtamu=$ambil");
$data = $sql->fetch();
	$idtamu = $data['idtamu'];
	$username = $data['username'];

$sqlupdate = $pdo->query("INSERT INTO kontak VALUES('', '$idtamu', '$username', '', '$teks')");
echo"<script>window.location.replace('../kontak');
 	</script>";
}
?>
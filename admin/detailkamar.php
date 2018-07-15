<?php
	require_once "view/header.php";

	$ambil = $_GET['id'];
  	$sql = $pdo->query("SELECT * FROM kamar WHERE idkamar='$ambil'");
  	$caridata = $sql->fetch();
  	$idkamar = $caridata['idkamar'];
  	$tipe = $caridata['tipe'];
  	$jumlah = $caridata['jumlah'];
  	$harga = $caridata['harga'];
  	$gambar = $caridata['gambar'];

  	$angka = number_format($harga,0,",",".");
?>

	<aside>
		<center>
			<h3>Detail Kamar</h3>
			<div id="kanan">
				<table align="center">
				<tr>
					<td colspan="3"><img src="../simpangambar/<?php echo $gambar?>" width="350px" height="250px"/></td>
				</tr>
				<tr>
					<td>ID Kamar</td>
					<td><center>:</center></td>
					<td><?php echo $idkamar ?></td>
				</tr>
				<tr>
					<td>Tipe</td>
					<td><center>:</center></td>
					<td><?php echo $tipe ?></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><center>:</center></td>
					<td><?php echo $jumlah ?></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><center>:</center></td>
					<td>Rp. <?php echo $angka ?></td>
				</tr>
				<tr>
					<td></td>
					<td><center><a href="datakamar"><button style="width:85px;background:#B40301;color:white;font-weight:bold;padding:4px;border:2px solid red;">&lt;&lt;Kembali</button></a></center></td>
					<td></td>
				</tr>
			  </table>
			</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
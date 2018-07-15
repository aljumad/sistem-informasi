<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Data Pembayaran</h3>
			<div id="kanan">
				<table border="2px solid black">
				<tr style="background: #B40301; color: white;">
					<th>Kode</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Bank</th>
					<th>No Rekening</th>
					<th>Nama Pemilik Rekening</th>
					<th>Bukti Pembayaran</th>
				</tr>
				<?php
					$sql = $pdo->query("SELECT * FROM pembayaran");
			  		while ($caridata = $sql->fetch()) {
			  		$id = $caridata['idpesan'];
			  		$nama = $caridata['nama'];
			  		$jumlah = $caridata['jumlah'];
			  		$bank = $caridata['bank'];
			  		$norek = $caridata['norek'];
			  		$namarek = $caridata['namarek'];
			  		$gambar = $caridata['gambar'];
  				?>
				<tr align="center">
					<td><?php echo $id ?></td>
					<td><?php echo $nama ?></td>
					<td><?php echo $jumlah ?></td>
					<td><?php echo $bank ?></td>
					<td><?php echo $norek ?></td>
					<td><?php echo $namarek ?></td>
					<td><a href="../simpangambar/<?php echo $gambar ?>" target="_blank"><img src="../simpangambar/<?php echo $gambar ?>" width="100px" height="50px"/></a></td>
				</tr>
				<?php
			  	}
			  ?>
			  </table>
			  
			  <a href="laporan-pembayaran" target="_blank"><button id="laporan" style="width:150px;background:black;color:white;font-weight:bold;padding:4px;border:2px solid white; margin-top: 5px;">Cetak Laporan</button></a>
			</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
<?php
	require_once "view/header.php";
?>

	<aside style="height: auto; margin-bottom: 5px;">
		<center>
		<div id="imglog">
			<p><br>>>Data Pemesanan Kamar<br>&nbsp;</p>
		</div>
			
		<div id="rekening" style="width: 60%; height: 200px;">
				<li>Rekening Hotel Horison</li>
				<table style="width: 98%;">
					<tr style="text-align: center; border: 2px solid #B40301">
						<td><img src="../gambar/mandiri.png" align="left"></td>
						<td style="color: #B40301; border-right: 2px solid #B40301;">0000-00-000000-000</td>
						<td><img src="../gambar/bca.jpg" align="left"></td>
						<td style="color: #B40301;";>1111-11-111111-111</td>
					</tr>
					<tr style="text-align: center; border: 2px solid #B40301">
						<td><img src="../gambar/bni.png" align="left"></td>
						<td style="color: #B40301; border-right: 2px solid #B40301">2222-22-222222-222</td>
						<td><img src="../gambar/bri.png" align="left"></td>
						<td style="color: #B40301;">3333-33-333333-333</td>
					</tr>
				</table>
			</div>
			
			<div id="pemesanan">
			<?php
			include"../fungsi/koneksi.php";
			$sqlx = $pdo->query("SELECT * FROM pemesanan WHERE idtamu = $ambil ORDER BY idpesan DESC");
			while($datax = $sqlx->fetch()){
				$idpesan = $datax['idpesan'];
				$tglpesan = $datax['tglpesan'];
				$batasbayar = $datax['batasbayar'];
				$idkamar = $datax['idkamar'];
				$tipe = $datax['tipe'];
				$harga = $datax['harga'];
				$jumlah = $datax['jumlah'];
				$idtamu = $datax['idtamu'];
				$namax = $datax['nama'];
				$alamat = $datax['alamat'];
				$telepon = $datax['telepon'];
				$tglmasuk = $datax['tglmasuk'];
				$tglkeluar = $datax['tglkeluar'];
				$lamahari = $datax['lamahari'];
				$totalbayar = $datax['totalbayar'];
				$status = $datax['status'];

				$tglpesann = date('d/m/Y', strtotime($tglpesan));
				$tglmasukk = date('d/m/Y', strtotime($tglmasuk));
				$tglkeluarr = date('d/m/Y', strtotime($tglkeluar));
				$batasbayarr = date('d/m/Y', strtotime($batasbayar));
				$batasjam = date('H:i:s', strtotime($batasbayar));

				$hargaa = number_format($harga,0,",",".");
				$angka = number_format($totalbayar,0,",",".");
		?>
			<div id="pesankamar">
			<table width="300px">
			<tr align="center">
				<td colspan="2">Kode Transaksi : <?php echo $idpesan ?>
					<input type="hidden" name="idd" value="<?php echo $idpesan ?>">
				</td>
			</tr>
			<tr align="center">
				
				<td colspan="2" >
				<?php
					$sqly = $pdo->query("SELECT * FROM kamar WHERE idkamar=$idkamar");
					while($datay = $sqly->fetch()){
						$gambary = $datay['gambar'];
				?>
					<img src="../simpangambar/<?php echo $gambary?>" width='200px' height='120px' style="border:2px solid #B40301;">
				<?php
					}
				?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pemesanan</td>
				<td><?php echo $tglpesann ?></td>
			</tr>
			<tr>
				<td>Tipe Kamar</td>
				<td><?php echo $tipe ?></td>
			</tr>
			<tr>
				<td>Harga / Hari</td>
				<td>Rp. <?php echo $hargaa ?></td>
			</tr>
			<tr>
				<td>Jumlah Kamar</td>
				<td><?php echo $jumlah ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $namax ?>
					<input type="hidden" name="namax" value="<?php echo $namax ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $alamat ?></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><?php echo $telepon ?></td>
			</tr>
			<tr>
				<td>Tanggal Check-In</td>
				<td><?php echo $tglmasukk ?></td>
			</tr>
			<tr>
				<td>Tanggal Check-Out</td>
				<td><?php echo $tglkeluarr ?></td>
			</tr>
			<tr>
				<td>Lama Menginap</td>
				<td><?php echo $lamahari ?> Hari</td>
			</tr>
			<tr style="background: #B40301;" align="center">
				<td style="color: white">Total Bayar</td>
				<td style="color: white">Rp. <?php echo $angka ?>
					<input type="hidden" name="total" value="<?php echo $totalbayar ?>">
				</td>
			</tr>
			<tr>
				<?php
					if ($status == "Berhasil") {
				
				echo '<td colspan="2" align="center" style="background: green;color: white;">Status Transaksi :';
					}
					else if ($status == "Pending...") {
						echo '<td colspan="2" align="center" style="background: blue;color: white;">Status Transaksi :';
					}
					else {
						echo '<td colspan="2" align="center" style="background: black;color: white;">Status Transaksi :';
					}
					date_default_timezone_set("Asia/Makassar");
					$tglsekarang = date('Y-m-d H:i:s');
					if ($tglsekarang > $batasbayar) {
						echo "Dibatalkan";
						$updatestatus = $pdo->query("UPDATE pemesanan SET status='Dibatalkan' WHERE idpesan=$idpesan");	
					}

					else {
						echo $status ;
						if ($status == "Pending...") {

							$sqly = $pdo->query("SELECT * FROM pembayaran WHERE idpesan='$idpesan'");
							$datay = $sqly->fetch();
							$idbayar = $datay['idpesan'];
							if ($idbayar == $idpesan) {
								echo "<br><p style='background: yellow; color: black'>Menunggu Verifikasi Pembayaran</p>";
							}
							else {
							echo "<br>Menunggu Proses Pembayaran<br>
							<p style='background:#B40301;'>Segera Lakukan Pembayaran Sebelum :</p>
							<p style='background:#B40301;'>Tanggal : $batasbayarr <br>Jam : $batasjam</p>
							Jika Tidak Transaksi Anda Dibatalkan<br>";
				?>
						<a href="bayar.php?id=<?php echo $idpesan ?>" ><button id="bbayar" style="width:150px;background:yellow;color:black;font-weight:bold;padding:4px;border:2px solid white; margin-bottom: 3px;">Konfirmasi Pembayaran</button></a>
				<?php
							}
						}
					}

				?>
				</td>
			</tr>
		</table>

		</div>
		<?php
			}
		?>
		</center>
		</div>
	</aside>

<?php
	require_once "view/footer.php"
?>
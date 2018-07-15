<?php
		require_once "view/header.php";
		
		$ambilx = $_GET['id'];

		$sqlx = $pdo->query("SELECT * FROM pemesanan WHERE idpesan='$ambilx'");
		$datax = $sqlx->fetch();
		$idpesan = $datax['idpesan'];
		$nama = $datax['nama'];
		$total = $datax['totalbayar'];

		

?>

	<div id="imglog">
		<p><br>>>Konfirmasi Pembayaran<br>&nbsp;</p>
	</div>
			<center>
			
			<div class="datapesan" style="background: rgba(0,123,123,0.6);padding: 10px;">
			
			<div style="width: 60%;background: rgba(0,0,123,0.6);padding: 10px;">

			<form method="post" action="../fungsi/prosesbayar" enctype="multipart/form-data">
			<table style="width: 90%;padding: 10px;margin: 10px;">
				<caption style="color: white;">Konfirmasi Pembayaran</caption>
			<tr>
				<td>ID Pemesanan</td>
				<td><input type="text" readonly="readonly" required="required" name="txtid" value="<?php echo $idpesan ?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" readonly="readonly" required="required" name="txtnama" value="<?php echo $nama ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td><input type="text" readonly="readonly" required="required" name="txtjumlah" value="<?php echo $total ?>"></td>
			</tr>
			<tr>
				<td>Bank</td>
				<td>
					<select name="txtbank" required="required" style="font-weight: bold">
						<option hidden="hidden">-Pilih Bank-</option>
						<option>Mandiri</option>
						<option>BCA</option>
						<option>BNI</option>
						<option>BRI</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>No. rekening</td>
				<td><input type="text" required="required" name="txtnorek"></td>
			</tr>
			<tr>
				<td>Nama Pemilik Rekening</td>
				<td><input type="text" required="required" name="txtnamarek"></td>
			</tr>
			<tr>
				<td>Upload Bukti Transfer</td>
				<td><input type="file" required="required" name="txtgambar"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Kirim" id="tombol" style="color: white;">
		</form>
		</div>
		</center>
		</div>
	</aside>

<?php
	require_once "view/footer.php"
?>
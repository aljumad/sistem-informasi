<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>Input Kamar</h3>
		<form method="post" action="fungsi/prosesinput" enctype="multipart/form-data">
			<table>
				<tr>
					<td>ID Kamar</td>
					<td><input type="text" required="required" name="id"></td>
				</tr>
				<tr>
					<td>Tipe</td>
					<td>
						<select name="tipe" required="required" style="font-weight: bold; border: 2px solid #B40301">
						<option selected="selected" disabled="disabled">--Pilih--</option>
						<option>Standard</option>
						<option>Superior</option>
						<option>Deluxe</option>
						<option>Junior Suite</option>
						<option>Suite</option>
						<option>Executive</option>
						<option>Presidential/Penthouse</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" required="required" name="jumlah"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" required="required" name="harga"></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><input type="file" required="required" name="gambar"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" style="width:100px;background:#B40301; color:white;font-weight:bold;padding:4px;border:2px solid #B40301;">Simpan</button></td>
				</tr>
			</table>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="formedit">
		<h3>Edit Stok Kamar</h3>

		<?php
			include "fungsi/koneksi.php";
			$ambil = $_GET['id'];
			$sql = $pdo->query("SELECT * FROM stokkamar WHERE idkamar='$ambil'");
			$data = $sql->fetch();
			$id = $data['idkamar'];
			$tipe = $data['tipe'];
			$stok = $data['stok'];
		?>

		<form method="post" action="fungsi/proseseditstok" enctype="multipart/form-data">
			<table>
				<tr>
					<td>ID Kamar</td>
					<td><input type="text" readonly="true" name="id" value="<?php echo $id ?>"></td>
				</tr>
				<tr>
					<td>Tipe</td>
					<td><input type="text" readonly="true" name="edittipe" value="<?php echo $tipe ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" required="required" name="editstok" value="<?php echo $stok ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" style="width:90px;background:#B40301; color:white;font-weight:bold;padding:4px;border:2px solid #B40301;">Update</button>
						<a href="stokkamar"><input type="button" style="width:90px;background:black;color:white;font-weight:bold;padding:4px;border:2px solid red;" value="Batal"></a>
					</td>
				</tr>
			</table>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
<?php
	require_once "view/header.php";
?>

	<div id="imglog">
		<p><br>>>Edit Profil<br>&nbsp;</p>
	</div>
	<div id="proff">
		<div id="profilbg">

			<div id="det">

		<form method="post" action="../fungsi/edit" enctype="multipart/form-data">
			<table style="background: transparent;">
				<tr>
					<td>Username</td>
					<td>
						<input type="hidden" name="tid" value="<?php echo $id ?>">
						<input type="text" required="required" name="tuser" value="<?php echo $username ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="Email" required="required" name="temail" value="<?php echo $email ?>"></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td><input type="text" required="required" name="tnama" value="<?php echo $nama ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" required="required" name="talamat" value="<?php echo $alamat ?>"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="text" required="required" name="ttelepon" value="<?php echo $telepon ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><img src="../simpangambar/<?php 
				if ($foto != '') {
					echo $foto;
				}
				else {
					echo 'profil.png';
				}
			?>" width='150'></td>
				</tr>
				<tr>
					<td>Foto</td>
					<td><input type="file" name="tfoto"></td>
				</tr>
				<tr>
					<td></td>
					<td><br><button type="submit" style="width:100px;background:#B40301; color:white;font-weight:bold;padding:4px;border:2px solid #B40301;">Update</button></td>
				</tr>
			</table>
		</form>
		</div>
		</div>
	</div>


<?php
	require_once "view/footer.php"
?>
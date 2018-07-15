<?php
	require_once "view/header.php";

if(isset($_POST['gantipass'])) {
	$idp = $_POST['tid'];
	$lama = md5($_POST['passlama']);
	$baru = md5($_POST['passbaru']);
	$konfirmasi = md5($_POST['konfirmasi']);
	$caripassword = $pdo->query("SELECT * FROM tamu WHERE password='$lama'");
	$cekpassword = $caripassword->rowCount();
	if($cekpassword == 0){
		echo"<script>alert('Password Lama Salah');document.location.href='#gantipassword';</script>";
	}else if($baru != $konfirmasi){
		echo"<script>alert('Password Baru Tidak Sama');document.location.href='#gantipassword';</script>";
	}else{
		$pdo->query("UPDATE tamu SET password='$baru' WHERE idtamu='$idp'");
		echo"<script>alert('Password Berhasil Diganti');document.location.href='profil';</script>";
	
	}

}
?>

	<div id="imglog">
		<p><br>>>Halaman Profil<br>&nbsp;</p>
	</div>
			
	<div id="proff">
		<div id="profilbg">
		<div id="profil">

			<div id="det">
				<table align="center" style="background: transparent;">
					<caption style="color: white">Profil</caption>
				<tr style="color: black" align="center">
					<td colspan="3"><img src="../simpangambar/<?php 
				if ($foto != '') {
					echo $foto;
				}
				else {
					echo 'profil.png';
				}
			?>" width="120px" height="120px"/></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><center>:</center></td>
					<td><?php echo $username ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><center>:</center></td>
					<td><?php echo $email ?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td><center>:</center></td>
					<td><?php echo $nama ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><center>:</center></td>
					<td><?php echo $alamat ?></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><center>:</center></td>
					<td><?php echo $telepon ?></td>
				</tr>
			  </table>
			</div>

		</div>
		<div id="eg">
			<a href="editprofil" class="pass2"> Edit/Upload Foto</a>
			<a href="#gantipassword" class="pass"> Ganti Password</a>
		</div>
		</div>
	</div>

		<div id="gantipassword">
		  <div class="isi_popup2" style="background: rgba(0,0,0,0.8);width: 37%;">
			<center>
			<li>Ubah Password</li>
			<form method="post" action="profil">
				<table align="center" style="width: 100%;margin: 5px;padding: 5px;">
					<tr>
						<td>Password Lama</td>
						<td>
							<input type="hidden" name="tid" value="<?php echo $id ?>">
							<input type="password" name="passlama"></td>
					</tr>
					<tr>
						<td>Password Baru</td>
						<td><input type="password" name="passbaru"></td>
					</tr>
					<tr>
						<td>Konfirmasi Password</td>
						<td><input type="password" name="konfirmasi"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</table>
				<input type="submit" id="tombol2" value="Ubah" name="gantipass" style="padding: 7px;">&nbsp;<a href="#" id="tomboll" style="padding: 7px;">Batal</a>
				</form>
				</center>
			</div>
		</div>

<?php
	require_once "view/footer.php"
?>
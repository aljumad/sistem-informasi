<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Kontak</h3>
			<div id="kanan">
				<?php
					include"fungsi/koneksi.php";
					$sql = $pdo->query("SELECT * FROM kontak");
					while($data = $sql->fetch()) {
					$idkontak = $data['idkontak'];
					$idtamu = $data['idtamu'];
					$username = $data['username'];
					$pesanuser = $data['pesanuser'];
					$pesanadmin = $data['pesanadmin'];
				?>
				<?php 
					if ($pesanuser != '') {
				?>
				<div style="text-align: left; ">
					<p style="text-align: center; margin-top: 3px; margin-left: 10px; margin-right:625px; padding: 2px; background: #B40301; color: white; font-weight: bold;"><?php echo $username ?></p>
				</div>
				
				<div style="background: #A6E22E; padding: 3px; text-align: left;margin-left: 10px;  margin-right: 200px; margin-top: 0; font-style: italic; font-weight: bold;">
					<?php echo $pesanuser ?>
				</div>
				<?php 
					}
				?>


				<?php 
					if ($pesanadmin != '') {
				?>
				<p style="text-align: center; margin-top: 3px; margin-left: 200px; margin-right: 550px; padding: 1px; background: black; color: white; font-weight: bold;">
					<?php	echo 'Admin'?></p>
					
				<div align="right" style="background: #FFE793; padding: 3px; text-align: left;margin-left: 200px; margin-top: 0; font-style: italic; font-weight: bold;">
					<?php echo $pesanadmin ?>
				</div>
				<?php
					}
				?>

				</center>
				<?php 
					if ($pesanadmin == '') {
				?>
				<details>
					<summary style="width:70px;background:black;color:white;font-weight:bold;padding:0px;border:1px solid white;margin-left: 10px;">Balas</summary>
				<form method="post" action="fungsi/proseskontak" style="margin-top: 0; margin-left: 10px;">
					<input type="hidden" name="txtid" value="<?php echo $idtamu ?>">
					<textarea name="tekss" required="required" cols="95" rows="2" placeholder="Ketikkan Pesan..."></textarea><br>
					<button type="submit" align="left" style="width:70px;background:#B40301;color:white;font-weight:bold;padding:4px;border:1px solid red;" name="ok">Kirim</button>
				</form>
				</details>
			  	<?php
			  				
						}
					}
				?>
			</div>
		
	</aside>

<?php
	require_once "view/footer.php"
?>
<?php
	require_once "view/header.php";

	if(isset($_POST['submit'])) {
		$ambil2 = $_POST['txtid'];
		$teks = $_POST['teks'];
		$sqlx = $pdo->query("SELECT * FROM tamu WHERE idtamu=$ambil2");
		$datax = $sqlx->fetch();
		$idt = $datax['idtamu'];
		$user = $datax['username'];

		$sqlsimpan = $pdo->query("INSERT INTO kontak VALUES('', '$idt', '$user', '$teks', '')");
?>
	<html>
	<head>
		<title></title>
		<script type="text/javascript" src="../lib/sweet.js"></script>
	</head>
	<body>

	<?php
	echo"<script>window.location.replace('kontak.php');
	 	</script>";
	?>
	</body>
	</html>

<?php
	}
?>
		<div id="imglog">
			<p><br>>>Kontak Admin<br>&nbsp;</p>
		</div>
			
			
			<div id="kontak">
				<?php
					$sqly = $pdo->query("SELECT * FROM kontak WHERE idtamu=$ambil");
					while($datay = $sqly->fetch()) {
					$idkontak = $datay['idkontak'];
					$idtamu = $datay['idtamu'];
					$usern = $datay['username'];
					$pesanuser = $datay['pesanuser'];
					$pesanadmin = $datay['pesanadmin'];

				?>
				<!--<div>
					<p style="text-align: left; margin-left: 10px;">Anda</p>
				</div>-->
				<?php 
					if ($pesanuser != '') {

				?>
				<div style="background: #A6E22E; padding: 5px; text-align: left; font-style: italic; font-weight: bold; border-radius: 10px;">
					<?php echo $pesanuser ?>
				</div>
				<?php
					}
				?>

				<?php 
					if ($pesanadmin != '') {

				?>
				<div>
					<p style="text-align: left; margin-top: 5px; margin-left: 200px; margin-right: 500px; padding: 5px; background: black; color: white; font-weight: bold;border-radius: 10px;"> Admin</p>
				</div>
				<div align="right" style="background: #FFE793; padding: 5px; text-align: left;margin-left: 200px; margin-top: 0; margin-bottom: 5px; font-style: italic; font-weight: bold;border-radius: 10px;">
					<?php echo $pesanadmin ?>
				</div>
				<?php
						}
					}
				?>
				<form method="post" action="kontak" style="margin-top: 5px;">
					<input type="hidden" name="txtid" value="<?php echo $id ?>">
					<textarea name="teks" required="required" cols="95" rows="5" placeholder="Ketikkan Pesan..."></textarea><br>
					<input type="submit" style="border: 0px solid red;" name="submit" value="Kirim" id="tombol">
				</form>

			</div>
		</center>
		</div>

<?php
	require_once "view/footer.php"
?>
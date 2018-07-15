<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Stok Kamar</h3>
		<div id="datakamar">
		<?php
			include"fungsi/koneksi.php";
			$sql = $pdo->query("SELECT * FROM stokkamar");
			while($data = $sql->fetch()){
				$id = $data['idkamar'];
				$tipe = $data['tipe'];
				$stok = $data['stok'];

				$bts = 25;
				$tpak = strlen($tipe);
				if($tpak > $bts) {
					$tp = substr($tipe, 0, $bts) . '...';
				}
				else {
					$tp = $tipe;
				}

			$sql2 = $pdo->query("SELECT * FROM kamar WHERE idkamar=$id");
			while($data2 = $sql2->fetch()){
				$gambar = $data2['gambar'];
		?>
			<div class="kamar">
				<table>
					<tr>
						<td>
							<center>
								<a href="detailkamar?id=<?php echo $id ?>" style="text-decoration:none;">
								<div class="idkamar">
									<?php echo $id ?>
			
								</div>
								<div class="tipekamar"><b><?php echo $tp ?></div></b>
								<img src="../simpangambar/<?php echo $gambar ?>" width="200px" height="150px"/>
								<div class="tipekamar">Stok <?php echo $stok ?> Kamar</div>
								</a>
							</center>
						</td>
					</tr>
					<tr>
						<td>
							<center>
								<a href="editstok?id=<?php echo $id ?>"><button style="width:70px;background-color:#000;color:white;font-weight:bold;padding:4px;border:1px solid red;">Edit</button></a> 

								<a href="fungsi/hapusstok?id=<?php echo $id ?>" onclick="return confirm('Anda akan menghapus?')"><button style="width:70px;background:#B40301;color:white;font-weight:bold;padding:4px;border:1px solid red;">Hapus</button>
							</center>
						</td>
					</tr>
				</table>
			</div>
			<?php
					}
				}
			?>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Data Kamar</h3>
		<div id="datakamar">
		<?php
			include"fungsi/koneksi.php";
			$sql = $pdo->query("SELECT * FROM kamar");
			while($data = $sql->fetch()){
				$id = $data['idkamar'];
				$tipe = $data['tipe'];
				$jumlah = $data['jumlah'];
				$harga = $data['harga'];
				$gambar = $data['gambar'];

				$bts = 25;
				$tpak = strlen($tipe);
				if($tpak > $bts) {
					$tp = substr($tipe, 0, $bts) . '...';
				}
				else {
					$tp = $tipe;
				}

				$angka = number_format($harga,0,",",".");
		?>
			<div class="kamar">
				<table>
					<tr>
						<td>
							<center>
								<a href="detailkamar?id=<?php echo $id ?>" style="text-decoration:none;">
								<div class="idkamar">
									<?php echo $id ?><br>
									<?php echo $tp ?>
								</div>
								<div class="tipekamar"><b>Rp. <?php echo $angka ?></div></b>
								<img src="../simpangambar/<?php echo $gambar ?>" width="200px" height="150px"/>
								<div class="tipekamar">Jumlah <?php echo $jumlah ?> Kamar</div>
								</a>
							</center>
						</td>
					</tr>
					<tr>
						<td>
							<center>
								<a href="editkamar?id=<?php echo $id ?>"><button style="width:70px;background-color:#000;color:white;font-weight:bold;padding:4px;border:1px solid red;">Edit</button></a> 

								<a href="fungsi/hapuskamar?id=<?php echo $id ?>" onclick="return confirm('Anda akan menghapus?')"><button style="width:70px;background:#B40301;color:white;font-weight:bold;padding:4px;border:1px solid red;">Hapus</button></a> 
							</center>
						</td>
					</tr>
				</table>
			</div>
			<?php
				}
			?>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
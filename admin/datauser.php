<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Data User</h3>
			<div id="kanan">
				<table border="2px solid black">
				<tr style="background: #B40301; color: white;">
					<th>ID</th>
					<th>Username</th>
					<th>Email</th>
					<th>Nama Lengkap</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Action</th>
				</tr>
				<?php
					$sql = $pdo->query("SELECT * FROM tamu");
			  		while ($caridata = $sql->fetch()) {
			  		$id = $caridata['idtamu'];
			  		$username = $caridata['username'];
			  		$email = $caridata['email'];
			  		$nama = $caridata['nama'];
			  		$alamat = $caridata['alamat'];
			  		$telepon = $caridata['telepon'];
  				?>
				<tr align="center">
					<td><?php echo $id ?></td>
					<td><?php echo $username ?></td>
					<td><?php echo $email ?></td>
					<td><?php echo $nama ?></td>
					<td><?php echo $alamat ?></td>
					<td><?php echo $telepon ?></td>
					<td><a href="fungsi/hapususer?id=<?php echo $id ?>" onclick="return confirm('Hapus User?')"><button style="width:70px;background:#B40301;color:white;font-weight:bold;padding:4px;border:1px solid red;">Hapus</button></a> </td>
				</tr>
				<?php
			  	}
			  ?>
			  </table>
			  
			</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
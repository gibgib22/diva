<?php

	$koneksi = mysqli_connect("localhost","root","","koneksi_db");

	$query = mysqli_query($koneksi, "SELECT * FROM siswa");

	// var_dump($query);
	// while ($siswa = mysqli_fetch_assoc($query))
	// {
	// 	var_dump($siswa);
	// };
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
</head>
<center>
	<body>
		<h1>Daftar Siswa</h1>

		<a href="tambah.php">+Tambah Data</a><br><br>
		
<table table border = "1" style="border-collapse: collapse;">
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php 
			$i =1;
		?>
		<?php 
			while ($siswa = mysqli_fetch_assoc($query)):
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><a href="edit.php?id=<?php echo $siswa['id']; ?>">ubah</a>|
				<a href="delete.php?id=<?php echo $siswa['id']; ?>">hapus</a> 
			</td>
			<td><img width=100 src="<?php echo $siswa["gambar"] ?>"></td>
			<td><?php echo $siswa["nis"]; ?></td>
			<td><?php echo $siswa["nama"]; ?></td>
			<td><?php echo $siswa["email"]; ?></td>
			<td><?php echo $siswa["jurusan"]; ?></td>
		</tr>
		<?php 
			$i++; 
		?>

		<?php
			endwhile;
		?>
</table>
	</body>
</center>
</html>
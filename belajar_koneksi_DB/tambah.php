<?php
	$koneksi = mysqli_connect("localhost","root","","koneksi_db");
		if (isset($_POST["submit"])) 
		{
			$gambar = $_POST["gambar"];	
			$nis = $_POST["nis"];
			$nama = $_POST["nama"];
			$email = $_POST["email"];
			$jurusan = $_POST["jurusan"];

			$query = ("INSERT INTO siswa VALUES ('', '$gambar', '$nis', '$nama', '$email', '$jurusan') ");
			
			$siswa = mysqli_query($koneksi,$query);

			var_dump($siswa);
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
</head>
<body>
	<center>

		<h1>From Tambah Data</h1>

		<form action="" method="post">
			<table>
				<tr>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="text" name="gambar" required></td>
				</tr>
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nis" required></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" required></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="Tambah Data!" name="submit"></td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>
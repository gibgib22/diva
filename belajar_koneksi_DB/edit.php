<?php
	$koneksi = mysqli_connect("localhost","root","","koneksi_db");

	$id = $_GET['id'];
	$query = mysqli_query($koneksi,
			"SELECT * FROM siswa where id=$id" 
			);
	$siswa = mysqli_fetch_as


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
	<title>Ubah data</title>
</head>
<body>
	<center>

		<h1>From Ubah Data</h1>

		<form action="" method="post">
			<table>
				<tr>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="text" name="gambar" value="<?php echo $siswa["gambar"] ?>" required></td>
				</tr>
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nis" value="<?php echo $siswa["nis"] ?>" required></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $siswa["nama"] ?>" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" value="<?php echo $siswa["email"] ?>"required></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan" value="<?php echo $siswa["jurusan"]?> "required></td>
				</tr> 
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="Ubah Data!" name="submit"></td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>
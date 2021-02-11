<?php

	$koneksi=mysqli_connect("localhost","root", "", "koneksi_db");
	$id = $_GET["id"];
	$query = mysqli_query($koneksi, "DELETE FROM siswa where id=$id");

	// var_dump($query);

	if($query>0)
	{
		echo "
			<script>
				alert('data berhasil di hapus, yey! ');
				dokument.location.href = 'index.php';
			</script>
			"
			;
	}
?>
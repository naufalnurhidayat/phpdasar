<?php 
require "functions.php";

// Cek apakah tombol submit sudah dipencet apa belum
if ( isset($_POST["submit"]) ) {

	// cek apakah data berhasil ditambakan atau tidak
	if ( tambah($_POST) ) {
		echo "<script>
				alert('Data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('Data gagal ditambahkan');
				document.location.href = 'index.php';
			</script>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Film</title>
</head>
<body>

<h1>Tambah Data Film</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nama">Nama Film :</label>
			<input type="text" name="nama" id="nama" required>
		</li>

		<li>
			<label for="jenis">Jenis Film :</label>
			<input type="text" name="jenis" id="jenis" required>
		</li>

		<li>
			<label for="tahun">Tahun Terbit :</label>
			<input type="text" name="tahun" id="tahun" required>
		</li>

		<li>
			<label for="pencipta">Pencipta :</label>
			<input type="text" name="pencipta" id="pencipta" required>
		</li>

		<li>
			<label for="gambar">Gambar :</label>
			<input type="file" name="gambar" id="gambar">
		</li>

		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>
	</ul>
</form>

</body>
</html>
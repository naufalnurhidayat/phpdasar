<?php 
require "functions.php";

// ambil data dari URL
$id = $_GET["id"];

// query data film berdasarkan id
$tayangan = query("SELECT * FROM tb_animasi WHERE id = $id")[0];


// Cek apakah tombol submit sudah dipencet apa belum
if ( isset($_POST["submit"]) ) {

	// cek apakah data berhasil ditambakan atau tidak
	if ( ubah($_POST) ) {
		echo "<script>
				alert('Data berhasil diubah');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('Data gagal diubah');
				document.location.href = 'index.php';
			</script>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Film</title>
</head>
<body>

<h1>Ubah Data Film</h1>

<form action="" method="POST" enctype= "multipart/form-data">

	<input type="hidden" name="id" value="<?= $tayangan["id"];  ?>">
	<input type="hidden" name="gambarLama" value="<?= $tayangan["gambar"];  ?>">

	<ul>
		<li>
			<label for="nama">Nama Film :</label>
			<input type="text" name="nama" id="nama" value="<?= $tayangan["nama"] ?>" required>
		</li>

		<li>
			<label for="jenis">Jenis Film :</label>
			<input type="text" name="jenis" id="jenis" value="<?= $tayangan["jenis"] ?>" required>
		</li>

		<li>
			<label for="tahun">Tahun Terbit :</label>
			<input type="text" name="tahun" id="tahun" value="<?= $tayangan["tahun"] ?>" required>
		</li>

		<li>
			<label for="pencipta">Pencipta :</label>
			<input type="text" name="pencipta" id="pencipta" value="<?= $tayangan["pencipta"] ?>" required>
		</li>

		<li>
			<label for="gambar">Gambar :</label><br>
			<img src="img/<?php echo $tayangan['gambar']; ?>" width= 40><br>
			<input type="file" name="gambar" id="gambar">
		</li>

		<li>
			<button type="submit" name="submit">Ubah Data</button>
		</li>
	</ul>
</form>

</body>
</html>
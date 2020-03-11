<?php 
session_start();

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

// Koneksi ke datbase
require 'functions.php';

$animasi = query("SELECT * FROM tb_animasi");

// cek apakah tombol cari sudah ditakan apa belum
if ( isset($_POST["cari"]) ){
	$animasi = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Film</title>
	<style>
		.loader {
			width: 100px;
			position: absolute;
			top: 118px;
			left: 210px;
			z-index: -1;
			display: none;
		}

		@media print {
			.logout, .tambah, .form-cari, .aksi {
				display: none;
			}
		}
	</style>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
<a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>

<h1>Daftar Film</h1>

<a href="tambah.php" class="tambah">Tambah Data</a>
<br><br>

<form action="" method="POST" class="form-cari">
	<input type="text" name="keyword" autocomplete="off" autofocus placeholder="Masukkan keyword..." size="40" id="keyword">
	<button name="cari" type="submit" id="tombol-cari">Cari</button>

	<img src="img/loader.gif" class="loader">

</form>
<br>

<div id="container">
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Jenis</th>
		<th>Tahun</th>
		<th>Pencipta</th>
		<th class="aksi">Aksi</th>
	</tr>
<?php $no = 1; ?>
<?php foreach($animasi as $row) : ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><img src="img/<?php echo $row["gambar"]; ?>"width = "50"></td>
		<td><?php echo $row["nama"] ?></td>
		<td><?php echo $row["jenis"] ?></td>
		<td><?php echo $row["tahun"] ?></td>
		<td><?php echo $row["pencipta"] ?></td>
		<td class="aksi">
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>  
			|
			<a href="ubah.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin mengubah data?');">Ubah</a>
		</td>
	</tr>
<?php $no++; ?>
<?php endforeach; ?>
</table>
</div>

</body>
</html>
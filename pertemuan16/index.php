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
</head>
<body>
<a href="logout.php">Logout</a>

<h1>Daftar Film</h1>

<a href="tambah.php">Tambah Data</a>
<br><br>

<form action="" method="POST">
	<input type="text" name="keyword" autocomplete="off" autofocus placeholder="Masukkan keyword..." size="40">
	<button name="cari" type="submit">Cari</button>
</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Jenis</th>
		<th>Tahun</th>
		<th>Pencipta</th>
		<th>Aksi</th>
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
		<td>
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>  
			|
			<a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a>
		</td>
	</tr>
<?php $no++; ?>
<?php endforeach; ?>
</table>

</body>
</html>
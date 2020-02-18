<?php 
if ( !isset($_GET["nama"])||
	 !isset($_GET["jenis"])||
	 !isset($_GET["tahun"])||
	 !isset($_GET["pencipta"])||
	 !isset($_GET["gambar"]) ){
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Kartun</title>
</head>
<body>

<ul>
	<li><img src="img/<?php echo $_GET["gambar"]; ?>"></li>
	<li>Nama: <?php echo $_GET["nama"]; ?></li>
	<li>Jenis: <?php echo $_GET["jenis"]; ?></li>
	<li>Tahun: <?php echo $_GET["tahun"]; ?></li>
	<li>Pencipta: <?php echo $_GET["pencipta"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar animasi</a>

</body>
</html>
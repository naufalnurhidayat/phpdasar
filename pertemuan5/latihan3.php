<?php 

$barang = ["Buku", "Pulpen", "Pensil", "Penghapus"];

$siswa = [
	["Naufal Nur Hidayat", "Laki-laki", "Islam", "SMK Informatika Utama"],
	["Razwan Syahrizal", "Laki-laki", "Islam", "SMK Al-Hidayah"]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3</title>
</head>
<body>

<h3>Data Barang</h3>

<ul>
	<?php foreach ( $barang as $tool ) : ?>
		<li><?= $tool; ?></li>
	<?php endforeach; ?>
</ul>

<h1>Data Siswa</h1>

<?php foreach ( $siswa as $murid ) : ?>
<ul>
	<li>Nama: 			<?= $murid[0]; ?></li>
	<li>Jenis Kelamin: 	<?= $murid[1]; ?></li>
	<li>Agama: 			<?= $murid[2]; ?></li>
	<li>Sekolah: 		<?= $murid[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
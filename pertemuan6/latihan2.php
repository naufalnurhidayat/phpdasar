<?php 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$animasi = [
				[
					"gambar" => "Spongebob.jpg",
					"nama" => "Spongebob",
					"jenis" => "Hiburan",
					"tahun" => "1999",
					"pencipta" => "Stephen Helingburg"
				],
				[
					"gambar" => "Wrekitraplh.jpg",
					"nama" => "Wrek It Ralph",
					"jenis" => "Hiburan",
					"tahun" => "2013",
					"pencipta" => "Orang Luar"
				]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Kartun</title>
</head>
<body>

<h1>Daftar Kartun</h1>

<?php foreach ( $animasi as $kartun ): ?>
	<ul>
		<li>
			<img src="img/<?= $kartun ["gambar"]; ?>">
		</li>
		<li>Nama Kartun: <?= $kartun ["nama"]; ?></li>
		<li>Jenis Kartun: <?= $kartun ["jenis"]; ?></li>
		<li>Tahun Keluaran Pertama: <?= $kartun ["tahun"]; ?></li>
		<li>Pencipta: <?= $kartun ["pencipta"]; ?></li>
	</ul>
<?php endforeach; ?>
</body>
</html>
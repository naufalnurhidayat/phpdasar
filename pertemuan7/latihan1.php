<?php 
// Superglobals adalah variabel yang dimiliki oleh PHP, dan variabelnya spesial
// Variabel Scope atau lingkup variabel
// contoh
//$x= 10; // ini adalah variabel lokal untuk halaman latihan1.php
// echo "$x";
// echo "<br>";

// function tampilx (  ){
// 	global $x;
// 	echo $x;
// }

// tampilx();

// variabel Superglobals
// variabel global milik PHP
// merupakan array associative
// contohnya
// var_dump($_GET);
// echo "<br>";
// var_dump($_POST);
// echo "<br>";
// var_dump($_SESSION);
// echo "<br>";
// var_dump($_REQUEST);
// echo "<br>";
// var_dump($_COOKIE);
// echo "<br>";
// var_dump($_ENV);
// echo "<br>";
// var_dump($_SERVER);
// echo "<br>";
// echo $_SERVER["SERVER_NAME"];


// GET

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
	<title>GET</title>
</head>
<body>

<h3>Daftar Kartun Kesukaan</h3>

<ul>
<?php foreach ( $animasi as $kartun ): ?>
	<li>
		<a href="latihan2.php?nama= <?= $kartun ["nama"]; ?>&jenis= <?php echo $kartun ["jenis"]; ?>&tahun=<?php echo $kartun ["tahun"]; ?>&pencipta=<?php echo $kartun ["pencipta"] ?>&gambar=<?php echo $kartun ["gambar"] ?>"><?php echo $kartun ["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>
</body>
</html>
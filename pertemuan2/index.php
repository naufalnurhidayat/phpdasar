<?php 
// Pertemuan 2 PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print = untuk mencetak tulisan, isi variabel dan lainnya (line 12 dan 13)
// Kutip dua lebih sakti daripada kutip satu, ini dapat menggunakan konsep interpolasi
// interpolasi adalah untuk mengeck di dalam kutip dua(string) apakah ada variabel atau tidak (line 71 - 77)
// print_r = untuk mencetak isi array tapi bisa juga untuk mencetak string (line 14)
// var_dump = biasanya untuk melihat isi dari variabel (biasanya untuk debuging)(line 15)

echo "Naufal Nur Hidayat, ";
print"SMK Informatika Utama, ";
print_r("Depok, ");
var_dump("Indonesia.");

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML (line 61)
// 2. HTML di dalam PHP (line 64)

// Variabel dan Tipe data
// Variabel (Variabel digunakan untuk menampung sebuah nilai)(contohnya line 26)
// Aturan dalam membuat variabel
// 1. Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// 2. Tidak boleh ada spasi dan tanda baca yang lainnya kecuali underscore
$nama = "Ir. Naufal Nur Hidayat";
$nama1 = "Naufal Nur Hidayat, S.Kom";

// Operator
// Aritmatika
// Yaitu +(tambah), -(kurang), *(kali), /(bagi), %(modulus atau sisa bagi)

// Penggabung string / cocatenation / concat
// ini opratornya titik(.)

// Assignment(oprator penugasan)
// =, +=, -=, *=, /=, %=, .=

// Perbandingan (Biasanya digunakan untuk pengkondisian)
// Operator perbandingan tidak mengecek tipe datanya
// <, >, <=, >=, ==, !=

// Identitas
// Operator ini bisa mengecek tipe datanya
// === !==

// Logika
// &&(kedua kondisi harus bernilai true)
// ||(cukup satu saja yang betul, pasti nilainya true) 
// !
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan Pertama</title>
</head>
<body>

	<!-- Ini merupakan penulisan PHP di dalam HTML -->
	<h1>Hallo, Selamat datang <?php echo "Naufal Nur Hidayat"; ?></h1>

	<!-- Ini merupakan penulisan HTML di dalam PHP -->
	<?php 
		echo "<br>";
		print "Hallo Selamat datang Naufal Nur Hidayat";
	?>
	<h1>Hallo, <?php echo $nama; ?></h1>

<?php 
// Kalau menggunakan Kutip dua, interpolasinya jalan
echo "Hallo $nama1"; ?>

<br>
<?php 
// Tapi kalau menggunakan kutip satu, interpolasinya ga jalan
echo 'Hallo, nama saya $nama'; ?>

<br>
<?php echo 1 + 4; ?>

<br>
<?php 
// Atau bisa juga disimpan di dalam variabel
$x= 2;
$y= 3;
echo $x + $y; ?>

<h1>
<?php 
$nama_depan = "Ir.";
$nama_belakang = "Naufal Nur Hidayat";
echo $nama_depan . " " . $nama_belakang; ?>
</h1>

<h1>
	<?php  
		$nama = "Naufal Nur Hidayat,";
		$nama .= " ";
		$nama .= "S.Kom., M.Kom.";
	echo $nama; ?>
</h1>

<?php 
var_dump(1 == "1");
var_dump(1 === "1"); ?>

<br>
<?php 
$z = 20;
var_dump($z < 20 && $z %2 == 0); ?>
</body>
</html>
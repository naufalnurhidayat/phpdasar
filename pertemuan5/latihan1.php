<?php 
	// array
	// array adalah sebuah variabel yang dapat menampung banyak nilai
	// array juga adalah pasangan antara key dan value
	// key-nya yaitu index
	// elemen pada array boleh memiliki tipe data yang berbeda
	
// cara penulisan array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Naufal", false];

// Menampilkan array
// echo tidak bisa untuk menampilkan array
// menampilkannya dengan menggunakan var_dump() atau print_r()
var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen array
echo $hari [0];
echo "<br>";

// menambahkan array
$hari[] = "Kamis";
var_dump($hari);
?>
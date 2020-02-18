<?php 

// Function adalah potongan program atau baris baris program yang digunakan
// untuk mempermudah kita
// Jenis jenis function:
// Build-in-function (Function yang sudah disediakan oleh PHP)
// User-defined-function (Function yang kita buat sendiri)

// Jenis jenis fungsi:
// Date/time
// (date)
// (time)
// (mktime)
// (strtotime)

// date
	echo date("l, d-M-Y");

	echo "<br>";

// time
// UNIX Timestamp / EPOCH Time
	//echo time();
	echo date("l, d-M-Y", time()+60*60*24*30);

	echo "<br>";

// mktime
// membuat sendiri detik sejak 1 Januari 1970
// cara memanggilnya dengan format:
// mktime(0,0,0,0,0,0);
// urutannya yaitu jam, menit, detik, bulan, tanggal, tahun

	echo date("l",mktime(0,0,0,7,16,2003));

	echo "<br>";

// strtotime
	echo date("l", strtotime("15 march 2003"));
 ?>
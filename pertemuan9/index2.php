<?php 
// Koneksi ke datbase
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel animasi/query dari tabel animasi
$result = mysqli_query($conn, "SELECT * FROM tb_animasi");

// Ambil data (fetch) animasi object result
// mysqli_fetch_row()		Mengembalikan array numerik
// mysqli_fetch_assoc()		Mengembalikan array associative
// mysqli_fetch_array()		Mengembalikan kedua
// mysqli_fetch_object()

// while ($animasi = mysqli_fetch_assoc($result) ) {
// 	var_dump($animasi);
// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Animasi</title>
</head>
<body>

<h1>Daftar Animasi</h1>

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
<?php while($row = mysqli_fetch_assoc($result) ) : ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><img src="img/<?php echo $row["gambar"]; ?>"width = "50"></td>
		<td><?php echo $row["nama"] ?></td>
		<td><?php echo $row["jenis"] ?></td>
		<td><?php echo $row["tahun"] ?></td>
		<td><?php echo $row["pencipta"] ?></td>
		<td>
			<a href="">Hapus</a>  |
			<a href="">Ubah</a>
		</td>
	</tr>
<?php $no++; ?>
<?php endwhile; ?>
</table>

</body>
</html>
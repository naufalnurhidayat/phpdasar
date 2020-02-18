<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	// Ambil data dari tiap elemen form
	$nama = htmlspecialchars($data["nama"]);
	$jenis = htmlspecialchars($data["jenis"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$pencipta = htmlspecialchars($data["pencipta"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO tb_animasi
				VALUES
				('','$nama','$jenis','$tahun','$pencipta','$gambar')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}

function hapus($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM tb_animasi WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	// Ambil data dari tiap elemen form
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$jenis = htmlspecialchars($data["jenis"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$pencipta = htmlspecialchars($data["pencipta"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "UPDATE tb_animasi SET
				nama = '$nama',
				jenis = '$jenis',
				tahun = '$tahun',
				pencipta = '$pencipta',
				gambar = '$gambar'
			WHERE id = $id
			";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}
?>
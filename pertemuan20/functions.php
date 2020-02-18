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

	// upload gambar
	$gambar = upload();
	if ( !$gambar ) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO tb_animasi
				VALUES
				('','$nama','$jenis','$tahun','$pencipta','$gambar')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah ada gambar yang diupload
	if ( $error === 4){
		echo "<script>
				alert('Pilih gambar dulu coy!!!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload gambar apa bukan
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('INI BUKAN GAMBAR COYY!!!');
			  </script>";
		return false;
	}

	// cek ukuran gambarnya
	if ( $ukuranFile > 2000000) {
		echo "<script>
				alert('Ukuran gambar terlalu besar');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
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
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah gambar diubah atau tidak
	if ( $_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}

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


function cari($keyword) {
	$query = "SELECT * FROM tb_animasi
				WHERE
				nama LIKE '%$keyword%' OR
				jenis LIKE '%$keyword%' OR
				tahun LIKE '%$keyword%' OR
				pencipta LIKE '%$keyword%'
			";
	return query($query);
}


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek apakah username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");

	if ( mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Username sudah terdaftar');
			  </script>";
		return false;
	}

	// cek apakah password dan konfirmasi password sama atau tidak

	if ( $password !== $password2) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai!');
			  </script>";
			 return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan data ke dalam database
	mysqli_query($conn, "INSERT INTO tb_user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}
?>
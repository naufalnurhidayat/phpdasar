<?php 
require 'functions.php';

if ( isset($_POST["daftar"]) )  {

	if ( registrasi($_POST) > 0) {
		echo "<script>
				alert('Registrasi berhasil');
			  </script>";
	} else {
		 echo mysqli_error($conn);
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Regist</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Registrasi</h1>

<form action="" method="POST">
	<ul>
		<li>
			<label for="username">Username</label>
			<input type="text" name="username" id="username">
		</li>

		<li>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</li>

		<li>
			<label for="password2">Konfirmasi Password</label>
			<input type="password" name="password2" id="password2">
		</li>

		<li>
			<button type="submit" name="daftar">Daftar</button>
		</li>
	</ul>
</form>

</body>
</html>
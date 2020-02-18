<?php 
// Apakah tombol submit sudah ditekan apa belom
if ( isset($_POST["submit"]) ){
	// Cek username dan password
		if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
	// jika benar, riderect ke halaman admin
			header("Location: admin.php");
			exit; }
		else {
	// jika salah, tampilkan pesan
		$error = true; }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if( isset($error) ): ?>
	<p>Username/password salah!</p>
<?php endif; ?>

<ul>


	<form method="POST" action="">
		<li>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="submit">Kirim!</button>
		</li>
	</form>
</ul>

</body>
</html>
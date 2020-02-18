<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

<!-- <form action="latihan4.php" method="POST">
	Masukkan Nama:
	<input type="text" name="nama">
	<br>
	<button type="submit">Kirim!</button>
</form> -->

<?php if( isset($_POST["nama"]) ): ?>
	<h3>Hallo, Selamat Datang <?php echo $_POST["nama"]; ?></h3>	
<?php endif; ?>

<form action="" method="POST">
	Masukkan Nama:
	<input type="text" name="nama">
	<br>
	<button type="submit">Kirim!</button>
</form>

</body>
</html>
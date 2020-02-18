<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
</head>
<body>

<?php 
$angka = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
];
foreach ( $angka as $number ) : ?>
	<?php foreach ( $number as $nomor ): ?>
		<h6><?= $nomor ?></h6>
	<?php endforeach; ?>
<?php endforeach; ?>
</body>
</html>
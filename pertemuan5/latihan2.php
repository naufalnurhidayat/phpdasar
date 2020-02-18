<?php 
$angka =[1,2,3,4,5,6,7,8,9,10]
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		h1 {
			float: left;
		}

		h2 {
			float: left;
		}
	</style>
</head>
<body>
<?php for ( $i = 0; $i < count($angka); $i++ ) {?>
	<h1><?php echo $angka[$i]; ?></h1>
<?php } ?>

<br><br><br>

<?php foreach ( $angka as $a ) { ?>
	<h2><?= $a; ?></h2>
<?php } ?>

<br>

<?php foreach ($angka as $a) : ?>
	<p><?= $a; ?></p>
<?php endforeach; ?>
</body>
</html>
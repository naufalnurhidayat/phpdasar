<!DOCTYPE html>
<html>
<head>
	<title>Latiahan 2</title>
	<style>
		.warna-ganjil {
			color: red;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php 
		for ($b=1; $b <=3 ; $b++) { 
			echo "<tr>";
				for ($k=1; $k <=5 ; $k++) { 
					echo "<td>$b,$k</td>";
				}
			echo "</tr>";
		}
	?>
</table>

<br>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for ($r=1; $r <=5 ; $r++) : ?>
		<?php if ( $r % 2 == 1 ) : ?>
			<tr class="warna-ganjil">
		<?php else: ?>
			<tr>
		<?php endif; ?>
				<?php for ($c=1; $c <=5 ; $c++) : ?>
					<td><?= "$r,$c" ;?></td>
				<?php endfor; ?>
			</tr>
	<?php endfor; ?>
</table>

</body>
</html>
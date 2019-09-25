<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 2</title>
	<style>
		.kotak {
			margin: 2px;
			line-height: 30px;
			width: 30px;
			height: 30px;
			border: 1px solid #000;
			float: left;
			text-align: center;
		}
		.clear {
			clear: both;

		}
	</style>
</head>
<body>

	<?php for($i=1; $i <=5; $i++) : ?>
			<?php for ($j=1; $j <= $i ; $j++) : ?>
	<div class="kotak">
	 		<?php echo "$j"; ?>
	</div>
	<?php endfor; ?>
			<div class="clear"></div>
	<?php endfor; ?>
	

</body>
</html>
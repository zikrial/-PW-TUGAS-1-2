<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 3</title>
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
		.ganjil {
			background-color: #003;
			color: #fff;
		}
		.genap {
			background-color: #999;
		}
	</style>
</head>
<body>

	<?php for($i=1; $i <=5; $i++) : ?>
		<?php for ($j=1; $j <= $i ; $j++) : ?>
			<?php if ($i % 2 == 0) : ?>
		<div class="kotak genap">
	 		<?php echo "$j"; ?>
		</div>
	<?php else  : ?>
		<div class="kotak ganjil">
	 		<?php echo "$j"; ?>
		</div>
			<?php endif ?>
	<?php endfor; ?>
	 
	<div class="clear">
	</div>
	<?php endfor; ?>
	

</body>
</html>
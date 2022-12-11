<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
	<?= $style ?>
	<?= $script ?>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center" style="margin: 5% 0;">
			<img src="<?= base_url("asset/Inv.jpg")?>" style="width: 100%;">
		</div>
		<div style="margin: 2% 15%;">
			<a href="<?=base_url('scan');?>"><button class="btn btnHome btn-lg btn-block rounded-pill">Scan Barcode</button></a>
		</div>
		<div style="margin: 2% 15%;">
			<a href="<?=base_url('admin');?>"><button class="btn btnHome btn-lg btn-block  rounded-pill">Guest Book</button></a>
		</div>
	</div>
</body>
</html>

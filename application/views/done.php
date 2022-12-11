<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title?></title>
	<?= $style ?>
	<?= $script ?>
</head>
<body>
	<div class="container">
        <div class="row justify-content-center" style="margin: 5% 0;">
			<img src="<?= base_url("asset/Inv.jpg")?>" style="width: 100%;">
		</div>
		<div class="row justify-content-center" style="margin-bottom: 2%;">
			<h1 class="font-weight-bold" style="color: #850341;">Selamat Datang</h1>
		</div>
        <a href="<?=base_url('home');?>"><button class="btn btnK btn-lg btn-block">Kembali</button></a>
	</div>
</body>

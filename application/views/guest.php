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
			<h1 class="font-weight-bold">Informasi Kehadiran</h1>
		</div>
		<table class="table table-borderless">
			<tbody>
				<tr>
					<td>ID</td>
					<td>:</td>
					<td><?=$guest['ID'];?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?=$guest['FullName'];?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><?=$guest['Email'];?></td>
				</tr>
				<tr>
					<td>No Handphone</td>
					<td>:</td>
					<td><?=$guest['PNum'];?></td>
				</tr>
				<tr>
					<td>Wilayah</td>
					<td>:</td>
					<td><?=$guest['Reg'];?></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>:</td>
					<td><?php echo ($guest['Stat']) ? 'Hadir' : 'Belum Hadir'; ?></td>
				</tr>
			</tbody>
		</table>
		<div class="row" style="margin: 0 2%;">
			<div class="col-6">
				<a href="<?=base_url();?>"><button class="btn btnK btn-lg btn-block">Kembali</button></a>
			</div>
			<div class="col-6">
				<!-- update status -->
				<a href="<?php echo (!$guest['Stat']) ? base_url('Done/').$guest['ID'] : '#' ?>"><button class="btn btnHadir btn-lg btn-block">Hadir</button></a>
			</div>
		</div>
	</div>
</body>

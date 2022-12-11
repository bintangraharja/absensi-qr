<!DOCTYPE html>
<htmL>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title?></title>
	<?= $style ?>
	<?= $script ?>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center" style="margin: 2% 0;">
			<h1 class="text-center font-weight-bold" style="color: #550540;">Guest Book</h1>
		</div>
		<div class="row" style="margin-bottom: 2%;">
			<a href="<?=base_url('home');?>"><button class="btn btn-dark btn-lg">Kembali</button></a>
		</div>
		<table class="table">
			<thead class="thead-custom text-center">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Full Name</th>
					<th scope="col">Email</th>
					<th scope="col">Phone Number</th>
					<th scope="col">Status</th>
					<th scope="col">Barcode</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach($guests as $guest){
					$kode = $guest['ID'];
					$name = $guest['FullName'];
					$email = $guest['Email'];
					$phone = $guest['PNum'];
					$status = $guest['Stat'];
			?>
				<tr class="text-center">
					<td><?=$kode;?></td>
					<td><?=$name;?></td>
					<td><?=$email;?></td>
					<td><?=$phone;?></td>
					<td><label class="switch">
							<input type="checkbox" <?php if($status) {?> checked <?php }?> disabled>
							<span class="slider round"></span>
						</label>
					</td>
					<td><a href="<?php echo site_url('Admin/QRcode/'.$kode);?>" download="<?=$name;?>">
							<button>Download</button>
						</a>
					</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</body>
</htmL>

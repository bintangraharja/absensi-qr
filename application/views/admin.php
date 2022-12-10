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
		<h1 class="text-center" style="color: #550540;">Guest Book</h1>
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
				for($i = 100; $i < 250; $i++){
					$kode = 'Quiz'.$i;
					$name = "Bintang";
					$email = "bintang@gmail.com";
					$phone = "08980444007";
					$status = FALSE;
			?>
				<tr class="text-center">
					<td><?=$i;?></td>
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

<!DOCTYPE html>
<htmL>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><?=$title?> </h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>QR Barcode</th>
			</tr>
		</thead>
		<tbody>
		<?php
		for($i = 0; $i < 5; $i++){
			$kode = 'Quiz'.$i;
			$name = "Bintang";
			$phone = "08980444007";
		?>
			<tr>
				<td><?=$i;?></td>
				<td><?=$name;?></td>
				<td><?=$phone;?></td>
				<td><a href="<?php echo site_url('Admin/QRcode/'.$kode);?>" download="<?=$name;?>">
						<button>Download</button>
					</a>
				</td>
			</tr>
		<?php }?>
		</tbody>
	</table>

</body>
</htmL>

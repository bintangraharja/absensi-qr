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
	<?php $kode = 'Quiz';?>
	<a href="<?php echo site_url('Render/QRcode/'.$kode);?>" download>
  <img src="<?php echo site_url('Render/QRcode/'.$kode);?>" alt="W3Schools">
	Download</a>
</body>
</htmL>

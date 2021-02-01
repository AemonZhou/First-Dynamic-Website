<?php
// Setup document:
include('config/setup.php');

if ($_GET['page'] == '') {
	$pg = 'home';
} else {
  $pg = $_GET{'page'};
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">



</head>

<body>

	<div class="header temp_block">
		<?php include('template/header.php');?>
	</div>

	<div class="nav_main temp_block">
		<?php include('template/nav_main.php');?>
	</div>

	<div class="temp_block content">
		<?php include('content/'.$pg.'.php');?>
	</div>

	<div class="footer temp_block">
		<?php include('template/footer.php');?>
	</div>
</body>
</html>

<?php
session_start();
include('includes/config.php');
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>AHMS</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/ahms.css">
	<style>
		body {
 background-image: url("img/login-bg.jpg");

}

	</style>
</head>
<body >
	<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Athurashram Hostel System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="box text">
					<p><center><b>ATHURASHRAM HOSTEL MANAGEMENT SYSTEM</b></center></p>
					<p padding=0%;><center>Managed by Athura Seva Sangham</center></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

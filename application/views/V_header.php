<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?= base_url("assets/img/logo1.png") ?>" type="image/x-icon">
	<title><?= $title ?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/bootstrap-4.4.1/bootstrap.min.css")?>">
	<!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/mdb-free-4.11.0/mdb.min.css") ?>">
	<!-- JQuery UI -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/jquery-ui-1.12.1/jquery-ui.min.css")?>">
	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/adminlte-3.0.1/adminlte.min.css") ?>">
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/wasija-1.0/wasija.css") ?>">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/datepicker/css/datepicker.css') ?>" />

	<!-- Ionicons -->
	<link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/fontawesome-free-5.11.2/css/all.min.css") ?>">
	<!-- Select2 -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/select2-4.0.12/select2.min.css") ?>">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/overlayscrollbars/overlayscrollbars.min.css") ?>">
	<!-- DataTables -->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/fc-3.3.0/fh-3.1.6/r-2.2.3/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/> -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/datatables/datatables.css") ?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<header>
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?= base_url('') ?>" class="nav-link btn btn-info btn-sm text-white">
							<i class="fa fa-user"></i>&nbsp;Profile
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('') ?>" class="nav-link btn btn-danger btn-sm text-white">
							<i class="ion-log-out"></i>&nbsp;Keluar
						</a>
					</li>
				</ul>
			</nav>
		</header>

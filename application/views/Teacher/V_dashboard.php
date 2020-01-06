<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="assets/img/logo1.png" type="image/x-icon">
	<title><?= $title ?></title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/css/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="assets/css/overlayscrollbars.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/wasija.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" data-toggle="tooltip" data-placement="bottom"
						title="Hide Sidebar"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Home"><i
							class="fa fa-home"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="About"><i
							class="fa fa-info-circle"></i></a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<button class="nav-link btn btn-danger btn-sm text-white">
						<i class="ion-log-out"></i>&nbsp;Exit
					</button>
				</li>
			</ul>
		</nav>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">

			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="assets/user2-160x160.jpg" style="width:80px; height:80px" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<span class="text-gray"> My Name<br />
							Guru<br />
						SMKN 2 Klaten</span>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-header">MENU</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-wrench"></i>
								<p>
									Data Alat
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon ion ion-stats-bars"></i>
								<p>
									Data Peminjaman
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
            </li>
            <li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Data Siswa
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Dashboard</h1>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="small-box bg-info">
								<div class="inner">
									<h3>1</h3>

									<p>Data Alat</p>
								</div>
								<div class="icon">
									<i class="fas fa-wrench"></i>
								</div>
								<a href="#" class="small-box-footer">Go&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="small-box bg-success">
								<div class="inner">
									<h3>2</h3>

									<p>Data Peminjaman</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="#" class="small-box-footer">Go&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
							</div>
            </div>
            <div class="col-lg-3 col-6">
							<div class="small-box bg-danger">
								<div class="inner">
									<h3>3</h3>

									<p>Data Siswa</p>
								</div>
								<div class="icon">
									<i class="fas fa-user"></i>
								</div>
								<a href="#" class="small-box-footer">Go&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer class="main-footer">
			<strong>Copyright &copy; 2019 <a href="http://adminlte.io">WaSIJA</a>.</strong>
			Theme by <a href="http://adminlte.io">AdminLTE.io</a>. All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 1.0.0
			</div>
		</footer>

		<aside class="control-sidebar control-sidebar-dark">
		</aside>
	</div>

	<!-- JQuery -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="assets/js/mdb.min.js"></script>
	<!-- AdminLTE App -->
	<script type="text/javascript" src="assets/js/adminlte.min.js"></script>
	<!-- overlayScrollbars -->
	<script type="text/javascript" src="assets/js/jquery.overlayscrollbars.min.js"></script>
	<!-- My JS -->
	<script type="text/javascript" src="assets/js/wasija.js"></script>
</body>

</html>

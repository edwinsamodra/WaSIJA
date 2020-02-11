		<aside class="main-sidebar sidebar-dark-primary elevation-4">

			<a href="<?= base_url("Teacher") ?>" class="brand-link">
				<div class="text-center">
					<img src="<?= base_url("assets/img/not-logo1.png") ?>" alt="WASIJA Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
					<span class="brand-text font-bold">WASIJA</span>
				</div>
			</a>

			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url("assets/user2-160x160.jpg") ?>" style="width:80px; height:80px" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<span class="name-coloring">My Name<br />
							Administrator<br />
							SMKN 2 Klaten</span>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-header">MENU</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-wrench"></i>
								<p>
									Data Barang
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview" style="display: none;">
								<li class="nav-item">
								<a href="<?= base_url('Teacher/InsertAlat')?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Insert Barang</p>
								</a>
								</li>
								<li class="nav-item">
								<a href="<?= base_url('Teacher/BarangDatang')?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Barang Datang</p>
								</a>
								</li>
								<li class="nav-item">
								<a href="<?= base_url('Teacher/BarangHabisPakai')?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Barang Habis Pakai</p>
								</a>
								</li>
								<li class="nav-item">
								<a href="<?= base_url('Teacher/InventarisBarang')?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Inventaris Barang</p>
								</a>
								</li>
								<li class="nav-item">
								<a href="<?= base_url('Teacher/InventarisRuangan')?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Inventaris Ruangan</p>
								</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('Teacher/DataPeminjaman')?>" class="nav-link">
								<i class="nav-icon ion ion-stats-bars"></i>
								<p>
									Data Peminjaman
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('Teacher/DataSiswa')?>" class="nav-link">
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

									<p>Data Barang</p>
								</div>
								<div class="icon">
									<i class="fas fa-wrench"></i>
								</div>
								<a class="small-box-footer" id="expandAlat">Go&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
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
								<a href="<?= base_url('Teacher/DataPeminjaman')?>" class="small-box-footer">Go&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
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
								<a href="<?= base_url('Teacher/DataSiswa')?>" class="small-box-footer">Go&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
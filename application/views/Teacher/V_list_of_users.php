        <aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="<?= base_url('Teacher') ?>" class="brand-link">
				<div class="text-center">
					<img src="<?= base_url('assets/img/not-logo1.png') ?>" alt="WaSIJA Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
					<span class="brand-text font-bold">WaSIJA</span>
				</div>
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/user2-160x160.jpg') ?>" style="width:80px; height:80px" class="img-circle elevation-2"
							alt="User Image">
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
						<li class="nav-item">
							<a href="<?= base_url('Teacher/DataAlat')?>" class="nav-link">
								<i class="nav-icon fas fa-wrench"></i>
								<p>
									Data Alat
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
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
							<h1 class="m-0 text-dark">Data Siswa</h1>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<table id="table-pinjam" class="display datatable table table-hover">
								<thead class="bg-dark">
									<tr>
										<th>No</th>
										<th class="text-center">Nama Siswa</th>
										<th class="text-center">Kelas</th>
										<th class="text-center">Tahun Pembuatan</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody class="bg-light">
									<tr>
										<td>1</td>
										<td>Row 1 Data 1</td>
										<td>Row 1 Data 1</td>
										<td>Row 1 Data 2</td>
										<td class="text-center"> <button type="button" class="btn btn-primary btn-sm"
												data-toggle="modal" data-target="#detailModal"><i
													class="fa fa-search-plus"></i>&nbsp; Detail</button> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
		</div>
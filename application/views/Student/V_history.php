		<aside class="main-sidebar sidebar-dark-primary elevation-4">

			<a href="<?= base_url("Student") ?>" class="brand-link">
				<div class="text-center">
					<img src="<?= base_url("assets/img/not-logo1.png") ?>" alt="WaSIJA Logo"
						class="brand-image img-circle elevation-3" style="opacity: 0.8" />
					<span class="brand-text font-bold">WASIJA</span>
				</div>
			</a>

			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url("assets/user2-160x160.jpg") ?>" style="width:80px; height:80px"
							class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<span class="name-coloring">My Name<br />
							XII TKJ A<br />
							SMKN 2 Klaten</span>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-header">MENU</li>
						<li class="nav-item">
							<a href="<?= base_url("Student/PinjamBarang") ?>" class="nav-link">
								<i class="nav-icon ion ion-bag"></i>
								<p>
									Pinjam
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("Student/DataPeminjaman") ?>" class="nav-link">
								<i class="nav-icon ion ion-stats-bars"></i>
								<p>
									Data Peminjaman
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
							<h1 class="m-0 text-dark">Data Peminjaman</h1>
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
										<th class="text-center">Nama Alat</th>
										<th class="text-center">Jumlah</th>
										<th class="text-center">Tanggal Kembali</th>
										<th class="text-center">Approval Pinjam</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody class="bg-light">
									<tr>
										<td>1</td>
										<td>Row 1 Data 1</td>
										<td>Row 1 Data 1</td>
										<td>Row 1 Data 2</td>
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
		<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-dark">
						<h5 class="modal-title" id="detailModal">$Nama_Alat</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="text-white">&times;</span>
						</button>
					</div>
					<div class="modal-body px-4 py-4">
						<p>Peminjam : </p>
						<p>Nama Alat : </p>
						<p>Deskripsi Alat : </p>
						<p>Jumlah Alat : </p>
						<p>Tanggal Meminjam : </p>
						<p>Tanggal Kembali : </p>
						<p>Approval : </p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success btn-sm" data-dismiss="modal" data-toggle="modal"
							data-target="#perpanjangModal"><i class="fa fa-plus"></i>&nbsp; Perpanjang</button>
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"><i
								class="fa fa-check"></i>&nbsp; Kembalikan</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="perpanjangModal" tabindex="-1" role="dialog" aria-labelledby="perpanjangModal"
			aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header bg-dark">
						<h5 class="modal-title" id="perpanjangModal">Perpanjang</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="text-white">&times;</span>
						</button>
					</div>
					<form autocomplete="off" method="post" id="forminputPerpanjang" action="<?= base_url('Student/BlahBlah'); ?>">
						<div class="modal-body px-4 py-4">
							<label for="tanggan_kembali">Tanggal Kembali</label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" required class="form-control" class="datepicker" id="datepicker"
									placeholder="Pilih Tanggal Kembali">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Perpanjang</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i
									class="fa fa-times"></i>&nbsp; Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>

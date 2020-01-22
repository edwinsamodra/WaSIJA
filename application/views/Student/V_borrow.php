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

		<div class="content-wrapper"> <br />
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<div class="card card-gray-dark">
								<div class="card-header">
									<b><h3 class="card-title">Pinjam</h3></b>
								</div>
								<form autocomplete="off" method="post" id="forminputBorrow" action="<?= base_url('Student/BlahBlah'); ?>" role="form">
									<div class="card-body">
										<div class="card card-gray-dark">
											<div class="card-header">
												<div class="col-lg-10">
													<h4 class="card-title">Alat</h4>
												</div>
												<div class="float-right l-0 r-0 col-lg-2 btnPlace">
													<button type="button" id="createDup" class=""><i
															class="fa fa-plus"></i></button>
													<button type="button" style="display:none;" id="deleteDup" class=""><i
															class="fa fa-times"></i></button>
												</div>
											</div>
											<div class="upestAlat card-body">
												<div class="allOfAlat">
													<label for="nama_alat">Nama Alat 1</label>
													<div class="input-group mb-2">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="fa fa-font"></i></span>
														</div>
														<input type="text" required class="form-control" id="nama_alat" autofocus
															name="nama_alat1" placeholder="Masukkan Nama Alat">
													</div>
													<label for="nama_alat">Deskripsi Alat</label>
													<div class="input-group mb-2">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="fa fa-font"></i></span>
														</div>
														<input type="text" required class="form-control" id="desc_alat"
															name="desc_alat1" placeholder="Masukkan Deskripsi Alat">
													</div>
													<label for="jumlah_alat">Jumlah</label>
													<div class="input-group mb-2">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="fa fa-font"></i></span>
														</div>
														<input type="number" min="1" oninput="this.value = Math.abs(this.value); if (this.value == 0) { alert('Minimal Meminjam 1'); $('#jumlah_alat').val('1') }" required class="form-control" id="jumlah_alat"
															name="jumlah1" placeholder="Masukkan Jumlah Alat">
													</div>
												</div>
											</div>
										</div>
										<input type="hidden" name="tanggal_pinjam" value="<?= date('d/m/Y')?>">
										<label for="tanggan_kembali">Tanggal Kembali</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-calendar"></i></span>
											</div>
											<input type="text" name="tanggal_kembali" required class="form-control" class="datepicker" id="datepicker"
												placeholder="Pilih Tanggal Kembali">
										</div>
										<label for="aproval">Approve By</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-user"></i></span>
											</div>
											<select required name="aproval" id="aproval" class="form-control">
												<option value="">-- Pilih Approval --</option>
												<option value="Pak Anto">Pak Anto</option>
												<option value="Pak Sigit">Pak Sigit</option>
												<option value="Pak Riza">Pak Riza</option>
												<option value="Pak Dalyanto">Pak Dalyanto</option>
												<option value="Bu Atik">Bu Atik</option>
												<option value="Pak Mus">Pak Mustofa</option>
												<option value="Pak Andi">Pak Andi</option>
											</select>
										</div>
										<div class="form-check">
											<input required type="checkbox" class="form-check-input" id="cek">
											<label  class="form-check-label" for="cek">Saya akan mengembalikannya tepat
												waktu</label>
										</div>
									</div>
									<div class="card-footer text-center">
										<button type="submit" class="btn btn-primary"><i
												class="fa fa-paper-plane"></i>&nbsp;Pinjam</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-2"></div>
					</div>
				</div>
			</section>
		</div>
"
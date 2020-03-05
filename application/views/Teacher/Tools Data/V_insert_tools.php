		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="<?= base_url('Teacher') ?>" class="brand-link">
				<div class="text-center">
					<img src="<?= base_url('assets/img/not-logo1.png') ?>" alt="WASIJA Logo"
						class="brand-image img-circle elevation-3" style="opacity: 0.8" />
					<span class="brand-text font-bold">WASIJA</span>
				</div>
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/user2-160x160.jpg') ?>" style="width:80px; height:80px"
							class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<span class="name-coloring">My Name<br />
							Administrator<br />
							SMKN 2 Klaten</span>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
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
							<h1 class="m-0 text-dark">Insert Barang</h1>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
                            <div class="card card-dark card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="insert-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="insert-tabs-by-one-tab" data-toggle="pill"
                                                href="#insert-tabs-by-one" role="tab" aria-controls="insert-tabs-by-one"
                                                aria-selected="true">1 by 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="insert-tabs-import-excel-tab" data-toggle="pill"
                                                href="#insert-tabs-import-excel" role="tab" aria-controls="insert-tabs-import-excel"
                                                aria-selected="false">Import (.xlsx)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="insert-tabs-content">
                                        <div class="tab-pane fade active show" id="insert-tabs-by-one" role="tabpanel"
                                            aria-labelledby="insert-tabs-by-one-tab">
											<div class="row">
												<form autocomplete="off" method="post" id="forminputBorrow" action="#" role="form">
													<!-- <div class="col-lg-4"></div> -->
													<div class="col-lg-8">
														<p>Isi semua data dengan benar, data yang tidak diperlukan untuk diinput dapat dikosongi saja. </p>
														<input type="text" name="tanggal_pembelian" class="form-control" id="datepicker"
															placeholder="Tanggal Pembelian"><br />
														<input type="text" name="nama_barang" class="form-control"
															placeholder="Nama Barang"> <br />
														<input type="text" name="spek_barang" class="form-control"
															placeholder="Spesifikasi"><br />
														<input type="number" name="jumlah_barang" class="form-control"
															placeholder="Jumlah Barang"><br />
														<input type="text" name="kode_barang" class="form-control"
															placeholder="Kode Barang"><br />
														<input type="number" name="harga_beli" class="form-control" min="1" step="any"
															placeholder="Harga Beli"><br />
														<input type="text" name="no_seri" class="form-control"
															placeholder="No Seri Barang"><br />
														<input type="text" name="ukuran_barang" class="form-control"
															placeholder="Ukuran Barang"><br />
														<input type="text" name="bahan_barang" class="form-control"
															placeholder="Bahan"><br />
														<select name="kondisi_barang" class="form-control">
															<option value="" disabled selected>Kondisi Barang</option>
															<option value="Baik">Baik</option>
															<option value="Rusak">Rusak</option>
														</select> <br />
														<select name="barang_ke" class="form-control">
															<option value="" disabled selected>Data Di Input Ke</option>
															<option value="1">Barang Habis Pakai</option>
															<option value="2">Barang Datang</option>
															<option value="3">Inventaris Barang</option>
															<option value="4">R J1</option>
															<option value="5">R J2</option>
															<option value="6">R JA 1</option>
															<option value="7">R JA 2</option>
														</select> <br />
														<input type="text" name="asal_barang" class="form-control"
															placeholder="Asal Barang"><br />
														<input type="text" name="sumber_dana" class="form-control"
															placeholder="Sumber Dana"><br />
														<textarea name="ket_barang" cols="55" rows="5" placeholder="Keterangan Barang"></textarea>
														<center><button type="submit" class="btn btn-primary"><i
															class="fa fa-save"></i>&nbsp; Save</button></center>
													</div>
    											</form>
											</div>
                                        </div>
                                        <div class="tab-pane fade" id="insert-tabs-import-excel" role="tabpanel"
                                            aria-labelledby="insert-tabs-import-excel-tab">
                                            <div class="row">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-10">
                                                    <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?= base_url('Teacher/ImportExcel'); ?>">
							<?= form_open_multipart(base_url('Teacher/ImportExcel'));?>
                                                        <label for="">Import (.xlsx)</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-file"></i></span>
                                                            </div>
                                                            <input type="file" name="item" required class="form-control"
                                                                placeholder="file (.xlsx)">
                                                        </div>
                                                        <center><button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&nbsp; Import</button></center>
							<?= form_close();?>
                                                    </form>
                                                </div>
                                                <div class="col-lg-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</section>
		</div>

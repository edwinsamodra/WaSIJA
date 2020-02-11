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
							<h1 class="m-0 text-dark">Inventarisasi Ruangan</h1>
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
                                    <ul class="nav nav-tabs" id="ir-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ir-tab-rj1-tab" data-toggle="pill"
                                                href="#ir-tab-rj1" role="tab" aria-controls="ir-tab-rj1"
                                                aria-selected="true">R J1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ir-tab-rj2-tab" data-toggle="pill"
                                                href="#ir-tab-rj2" role="tab" aria-controls="ir-tab-rj2"
                                                aria-selected="false">R J2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ir-tab-rja1-tab" data-toggle="pill"
                                                href="#ir-tab-rja1" role="tab" aria-controls="ir-tab-rja1"
                                                aria-selected="false">R JA 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ir-tab-rja2-tab" data-toggle="pill"
                                                href="#ir-tab-rja2" role="tab" aria-controls="ir-tab-rja2"
                                                aria-selected="false">R JA 2</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="ir-tab-content">
                                        <div class="tab-pane fade active show" id="ir-tab-rj1" role="tabpanel"
                                            aria-labelledby="ir-tab-rj1-tab">
                                                <table id="alat-rj1" class="display datatable table table-hover">
                                                    <thead class="bg-dark">
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Nama Barang</th>
                                                            <th class="text-center">Spesifikasi</th>
                                                            <th class="text-center">Kuantitas</th>
                                                            <th class="text-center">Tanggal Masuk</th>
                                                            <th class="text-center">Barang Dari</th>
                                                            <th class="text-center">Sumber Dana</th>
                                                            <th class="text-center">Harga Satuan</th>
                                                            <th class="text-center">Kode Barang</th>
                                                            <th class="text-center">Kondisi</th>
                                                            <th class="text-center">Ket</th>
                                                            <th class="text-center">AB</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-light">
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Router MikroTik</td>
                                                            <td>RB960</td>
                                                            <td>100</td>
                                                            <td>20-01-2020</td>
                                                            <td>Subsidi SMK</td>
                                                            <td>BOS</td>
                                                            <td>1.500.000</td>
                                                            <td>RB950PX</td>
                                                            <td>Baik</td>
                                                            <td>Baru saja dibeli</td>
                                                            <td class="text-center">
                                                                <button id="btnUpdateTools" class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Printer EPSON</td>
                                                            <td>CX022</td>
                                                            <td>100</td>
                                                            <td>20-01-2020</td>
                                                            <td>Subsidi SMK</td>
                                                            <td>BOS</td>
                                                            <td>9.500.000</td>
                                                            <td>E950PX</td>
                                                            <td>Baik</td>
                                                            <td>-</td>
                                                            <td class="text-center">
                                                                <button class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="tab-pane fade" id="ir-tab-rj2" role="tabpanel"
                                            aria-labelledby="ir-tab-rj2-tab">
                                            <table id="alat-rj2" class="display datatable table table-hover">
                                                <thead class="bg-dark">
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Spesifikasi</th>
                                                        <th class="text-center">Kuantitas</th>
                                                        <th class="text-center">Tanggal Masuk</th>
                                                        <th class="text-center">Barang Dari</th>
                                                        <th class="text-center">Sumber Dana</th>
                                                        <th class="text-center">Harga Satuan</th>
                                                        <th class="text-center">Kode Barang</th>
                                                        <th class="text-center">Kondisi</th>
                                                        <th class="text-center">Ket</th>
                                                        <th class="text-center">AB</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-light">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Router MikroTik</td>
                                                        <td>RB960</td>
                                                        <td>100</td>
                                                        <td>20-01-2020</td>
                                                        <td>Subsidi SMK</td>
                                                        <td>BOS</td>
                                                        <td>1.500.000</td>
                                                        <td>RB950PX</td>
                                                        <td>Baik</td>
                                                        <td>Baru saja dibeli</td>
                                                        <td class="text-center">
                                                            <button id="btnUpdateTools" class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Printer EPSON</td>
                                                        <td>CX022</td>
                                                        <td>100</td>
                                                        <td>20-01-2020</td>
                                                        <td>Subsidi SMK</td>
                                                        <td>BOS</td>
                                                        <td>9.500.000</td>
                                                        <td>E950PX</td>
                                                        <td>Baik</td>
                                                        <td>-</td>
                                                        <td class="text-center">
                                                            <button class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="ir-tab-rja1" role="tabpanel"
                                            aria-labelledby="ir-tab-rja1-tab">
                                            <table id="alat-rja1" class="display datatable table table-hover">
                                                <thead class="bg-dark">
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Spesifikasi</th>
                                                        <th class="text-center">Kuantitas</th>
                                                        <th class="text-center">Tanggal Masuk</th>
                                                        <th class="text-center">Barang Dari</th>
                                                        <th class="text-center">Sumber Dana</th>
                                                        <th class="text-center">Harga Satuan</th>
                                                        <th class="text-center">Kode Barang</th>
                                                        <th class="text-center">Kondisi</th>
                                                        <th class="text-center">Ket</th>
                                                        <th class="text-center">AB</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-light">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Router MikroTik</td>
                                                        <td>RB960</td>
                                                        <td>100</td>
                                                        <td>20-01-2020</td>
                                                        <td>Subsidi SMK</td>
                                                        <td>BOS</td>
                                                        <td>1.500.000</td>
                                                        <td>RB950PX</td>
                                                        <td>Baik</td>
                                                        <td>Baru saja dibeli</td>
                                                        <td class="text-center">
                                                            <button id="btnUpdateTools" class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Printer EPSON</td>
                                                        <td>CX022</td>
                                                        <td>100</td>
                                                        <td>20-01-2020</td>
                                                        <td>Subsidi SMK</td>
                                                        <td>BOS</td>
                                                        <td>9.500.000</td>
                                                        <td>E950PX</td>
                                                        <td>Baik</td>
                                                        <td>-</td>
                                                        <td class="text-center">
                                                            <button class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="ir-tab-rja2" role="tabpanel"
                                            aria-labelledby="ir-tab-rja2-tab">
                                            <table id="alat-rja2" class="display datatable table table-hover">
                                                <thead class="bg-dark">
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Spesifikasi</th>
                                                        <th class="text-center">Kuantitas</th>
                                                        <th class="text-center">Tanggal Masuk</th>
                                                        <th class="text-center">Barang Dari</th>
                                                        <th class="text-center">Sumber Dana</th>
                                                        <th class="text-center">Harga Satuan</th>
                                                        <th class="text-center">Kode Barang</th>
                                                        <th class="text-center">Kondisi</th>
                                                        <th class="text-center">Ket</th>
                                                        <th class="text-center">AB</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-light">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Router MikroTik</td>
                                                        <td>RB960</td>
                                                        <td>100</td>
                                                        <td>20-01-2020</td>
                                                        <td>Subsidi SMK</td>
                                                        <td>BOS</td>
                                                        <td>1.500.000</td>
                                                        <td>RB950PX</td>
                                                        <td>Baik</td>
                                                        <td>Baru saja dibeli</td>
                                                        <td class="text-center">
                                                            <button id="btnUpdateTools" class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Printer EPSON</td>
                                                        <td>CX022</td>
                                                        <td>100</td>
                                                        <td>20-01-2020</td>
                                                        <td>Subsidi SMK</td>
                                                        <td>BOS</td>
                                                        <td>9.500.000</td>
                                                        <td>E950PX</td>
                                                        <td>Baik</td>
                                                        <td>-</td>
                                                        <td class="text-center">
                                                            <button class="btn-sm btn-dark"><i class="fa fa-edit"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</section>
		</div>

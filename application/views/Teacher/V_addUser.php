        <aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="<?= base_url('Teacher') ?>" class="brand-link">
				<div class="text-center">
					<img src="<?= base_url('assets/img/not-logo1.png') ?>" alt="WASIJA Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
					<span class="brand-text font-bold">WASIJA</span>
				</div>
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/user2-160x160.jpg') ?>" style="width:80px; height:80px" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<span class="name-coloring">ADMINISTRATOR<br />
							ADMIN<br />
							SMKN 2 KLATEN</span>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-header">MENU</li>
						<li class="nav-item has-treeview">
							<a href="<?= base_url('Teacher/DataAlat')?>" class="nav-link">
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
									Account
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
							<h1 class="m-0 text-dark">Account</h1>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
                            <div class="card card-outline card-dark">
                                <div class="card-header">
                                    <h3 class="card-title">Add Account</h3>
                                </div>
                                <div class="card-body">
                                    <form autocomplete="off" class="form-horizontal" action="<?= base_url('Start_With/saveAccount');?>" method="post">
                                    <span style="font-size: 12px; color: red;">(*) Masukkan No Induk tanpa titik (.)<br />
                                    (*) No Induk dipakai untuk Username <br />
                                    (*) Minimal Password 8 character</span>
                                    <div class="md-form">
                                        <i class="fas fa-user prefix"></i>
                                        <input class="form-control" type="number" name="username" placeholder="1670379" id="username" required>
                                        <label for="username">No. Induk</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-font prefix"></i>
                                        <input class="form-control" type="text" name="nama" placeholder="ALBERT EINSTEIN" id="nama" style="text-transform:uppercase"required>
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                    <div class="md-form">
					<select class="form-control" name="kode" id="kode-id">
						<option value="" selected disabled>Jenis Akun</option>
						<option value="2">02 - Guru</option>
						<option value="3">03 - Siswa</option>
					</select>
                                    </div>
                                    <div class="kls-siswa">
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-at prefix"></i>
                                        <input class="form-control" type="email" name="email" placeholder="yourname@mail.com" id="email" style="text-transform:lowercase"required>
                                        <label for="email">E-mail</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-key prefix"></i>
                                        <input class="form-control" type="password" name="password_register" id="password_register" required>
                                        <label for="password_register">Password</label>
                                    </div>
                                    <div class="md-form">
                                        <i id="addicon" class="fas fa-times prefix" style="color: red"></i>
                                        <input class="form-control" type="password" name="password_confirm" id="password_confirm" required>
                                        <label for="password_confirm">Confirm Password</label>
                                        <a href="#ShowPassword" onclick="showPassword()">Show Password</a> <br />
                                    </div>
                                    <br/>
                                    <center>
                                        <input type="hidden" name="status_code" value="1">
                                        <button class="btn btn-danger btn-sm waves-effect" onclick="window.history.go(-1)"><i class="fas fa-times mr-1"></i>&nbsp;Cancel</button>
                                        <button id="btn_submit_register"class="btn btn-dark btn-sm waves-effect" type="submit" disabled><i class="fas fa-sign-in-alt mr-1"></i>&nbsp;Register</button><br />
                                    </center>
                                </form>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</section>
		</div>

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
							<h1 class="m-0 text-dark">Data Alat</h1>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
								aria-selected="true">J1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
								aria-selected="false">J2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
								aria-selected="false">J3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
								aria-selected="false">JA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
								aria-selected="false">Office</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
								aria-selected="false"><i class="fa fa-plus"></i></a>
							</li>
							</ul> <br />
							<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
								locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
								blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
								Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum
								PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
								salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
								sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
								stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
								wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
								lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
								locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
								squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
								etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
								stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
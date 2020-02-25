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

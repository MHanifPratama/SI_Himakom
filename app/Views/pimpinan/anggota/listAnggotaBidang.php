<?= $this->extend('templates/pimpinan/header') ?>

<div class="container-fluid position-relative d-flex p-0">
	<!-- Sidebar Start -->
	<?= $this->section('content') ?>
	<!-- Sidebar End -->

	<!-- Table Start -->
	<div class="container-fluid pt-4 px-4">
		<div class="row g-4">
			<div class="col-12">
				<div class="bg-secondary rounded h-100 p-4">
					<h5 class="my-3 ff-gantari">Tabel Anggota</h5>
					<table class="table table-hover table-responsive text-tertiary ff-gantari align-middle">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nama</th>
								<th scope="col">NPM</th>
								<th scope="col">Bidang</th>
								<th scope="col">Prodi</th>
								<th scope="col">Status Jabatan</th>
								<th scope="col">Nama Kepanitiaan</th>
								<th scope="col">Periode</th>
								<th scope="col">Opsi</th>
							</tr>
						</thead>
						<?php foreach ($BiodataBidang as $Bio) : ?>
						<tbody>
							<tr>
								<td><?= $Bio['id_anggota'] ?></td>
								<td><?= $Bio['nama_anggota'] ?></td>
								<td><?= $Bio['npm'] ?></td>
								<td><?= $Bio['nama_bidang'] ?></td>
								<td><?= $Bio['nama_prodi'] ?></td>
								<td><?= $Bio['nama_jabatan'] ?></td>
								<td><?= $Bio['nama_kepanitiaan'] ?></td>
								<td><?= $Bio['periode'] ?></td>
								<td>
									<div class="row row-cols-auto">
										<div class="col">
											<form action="" method="post">
												<input type="hidden" name="_method" value="DELETE" />
												<button type="submit" class="btn btn-dark btn-sm ff-gantari"><i
														class="fa fa-trash"></i></button>
											</form>
										</div>
										<div class="col">
											<a class="btn btn-dark btn-sm ff-gantari" href=""><i
													class="fa fa-pen"></i></a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
						<?php endforeach; ?>
						<caption>Total</caption>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Table End -->


	<!-- Footer Start -->

	<!-- Footer End -->
</div>
<!-- Content End -->

<footer class="container-fluid pt-4 px-4">
	<div class="bg-secondary rounded-top p-4">
		<div class="row">
			<div class="col-12 col-sm-6 text-center text-sm-start text-tertiary ff-gantari">
				&copy; 2022 <a href="#">SIHIMA</a>, All Right Reserved.
			</div>
		</div>
	</div>
</footer>
<!-- Back to Top -->
<a href="\tambah" class="btn btn-lg btn-light btn-lg-square back-to-top"><i class="bi bi-plus text-dark"></i></a>
<!-- <a href="\viewCetak" class="btn btn-lg btn-light btn-lg-square back-to-top mx-5"><i class="bi bi-printer text-dark"></i></a> -->
</div>



<?= $this->endSection() ?>
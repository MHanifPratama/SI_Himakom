<?= $this->extend('templates/header') ?>

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
								<th scope="col">Opsi</th>
							</tr>
						</thead>
						<?php foreach ($Jabatan as $jab) : ?>
							<tbody>
								<tr>
									<td><?= $jab['id_jabatan'] ?></td>
									<td><?= $jab['nama_jabatan'] ?></td>
									<td>
										<div class="row">
											<div class="col">
												<form action="/hapus_jabatan/<?= $jab['id_jabatan'] ?>" method="post">
													<input type="hidden" name="_method" value="DELETE" />
													<button type="submit" class="btn btn-dark btn-sm ff-gantari"><i class="fa fa-trash"></i></button>
												</form>
											</div>
											<div class="col">
												<a class="btn btn-dark btn-sm ff-gantari" href="/edit_jabatan/<?= $jab['id_jabatan'] ?>"><i class="fa fa-pen"></i></a>
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
<a href="\tambahJabatan" class="btn btn-lg btn-light btn-lg-square back-to-top"><i class="bi bi-plus text-dark"></i></a>
</div>



<?= $this->endSection() ?>
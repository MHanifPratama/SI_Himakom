<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>SIHIMA - Laporan</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<!-- Favicon -->
	<link href="/assets/img/himakom.png" rel="icon">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="/assets/css/laporan.css" rel="stylesheet">
</head>

<body class="text-dark ff-gantari bg-light">
	<div class="container-fluid pt-4 px-4">
		<div class="row g-4">
			<div class="col-12">
				<div class="rounded h-100 p-4">
					<h5 class="my-3 text-center">Tabel Anggota</h5>
					<table class="table text-dark ff-gantari">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Bidang</th>
								<th scope="col">Jumlah Anggota</th>
							</tr>
						</thead>
						<?php $counter1 = 0 ?>
						<?php foreach ($hasilPerhitungan as $count => $hasil) : ?>
						<tbody>
							<tr>
								<td><?= ++$counter1 ?></td>
								<td><?= $count ?></td>
								<td><?= $hasil ?></td>
							</tr>
						</tbody>
						<?php endforeach; ?>
					</table>
					<hr class="my-5">
					<table class="table table-responsive text-dark ff-gantari align-middle">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">ID</th>
								<th scope="col">Nama</th>
								<th scope="col">NPM</th>
								<th scope="col">Bidang</th>
								<th scope="col">Prodi</th>
								<th scope="col">Status Jabatan</th>
								<th scope="col">Nama Kepanitiaan</th>
								<th scope="col">Periode</th>
							</tr>
						</thead>
						<?php $counter2 = 0 ?>
						<?php foreach ($anggota as $Bio) : ?>
						<tbody>
							<tr>
								<td><?= ++$counter2 ?></td>
								<td><?= $Bio['id_anggota'] ?></td>
								<td><?= $Bio['nama_anggota'] ?></td>
								<td><?= $Bio['npm'] ?></td>
								<td><?= $Bio['nama_bidang'] ?></td>
								<td><?= $Bio['nama_prodi'] ?></td>
								<td><?= $Bio['nama_jabatan'] ?></td>
								<td><?= $Bio['nama_kepanitiaan'] ?></td>
								<td><?= $Bio['periode'] ?></td>
							</tr>
						</tbody>
						<?php endforeach; ?>
						<caption>Total</caption>
					</table>
				</div>
			</div>
		</div>
	</div>

	<footer class="container-fluid pt-4 px-4">
		<div class="rounded-top p-4">
			<div class="row">
				<div class="col-12 col-sm-6 text-center text-sm-start ff-gantari">
					&copy; 2022 <a href="#">SIHIMA</a>, All Right Reserved.
				</div>
			</div>
		</div>
	</footer>
</body>
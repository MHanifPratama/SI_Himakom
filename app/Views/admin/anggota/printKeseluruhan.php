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

<body class="text-dark ff-gantari">
	<div class="container-fluid">
		<div class="row g-4">
			<div class="col">
				<div class="rounded h-100">
					<header>
						<div class="d-flex align-items-end flex-column">
							<div class="">
								<button class="btn btn-dark my-3" id="printButton" onClick="window.print();">
									<i class="bi bi-printer"></i> Cetak</button>
							</div>
						</div>
						<div class="d-flex justify-content-between">
							<div class="">
								<img src="/assets/img/unila.png" width="80px">
							</div>
							<div class="text-center">
								<h6><b>HIMPUNAN MAHASISWA JURUSAN ILMU KOMPUTER (HIMAKOM)</b></h6>
								<h6><b>FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</b></h6>
								<h6><b>UNIVERSITAS LAMPUNG</b></h6>
								<p style="font-size: 13px;"><i>Jl. Prof. Dr. Soemantri Brojonegoro Gedung UKM FMIPA
										Gedong Meneng, Bandarlampung
										35145</i></p>
							</div>
							<div class="">
								<img src="/assets/img/himakom.png" width="70px">
							</div>
						</div>
						<hr>
					</header>
					<h6 class="mt-5 text-uppercase"><b>Rekapitulasi Anggota</b></h6>
					<table class="table table-borderless table-responsive text-dark ff-gantari">
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
								<td width="1%"><?= ++$counter1 ?></td>
								<td><?= $count ?></td>
								<td><?= $hasil ?></td>
							</tr>
						</tbody>
						<?php endforeach; ?>
					</table>
					<h6 class="mt-5 text-uppercase"><b>Tabel Anggota</b></h6>
					<table class="table table-borderless table-responsive text-dark ff-gantari align-middle">
						<thead>
							<tr>
								<th scope="col">No</th>
								<!-- <th scope="col">ID</th> -->
								<th scope="col">Nama</th>
								<th scope="col">NPM</th>
								<th scope="col">Bidang</th>
								<th scope="col">Prodi</th>
								<th scope="col">Jabatan</th>
								<th scope="col">Kepanitiaan</th>
								<th scope="col">Periode</th>
							</tr>
						</thead>
						<?php $counter2 = 0 ?>
						<?php foreach ($anggota as $Bio) : ?>
						<tbody>
							<tr>
								<td width="1%"><?= ++$counter2 ?></td>
								<!-- <td><?= $Bio['id_anggota'] ?></td> -->
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
					</table>
				</div>
			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="rounded-top">
			<div class="row">
				<div class="col-12 col-sm-6 text-sm-start ff-gantari">
					&copy; 2022 <a href="#">SIHIMA</a>, All Right Reserved.
				</div>
			</div>
		</div>
	</footer>
</body>
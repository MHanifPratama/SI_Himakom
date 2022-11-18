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

					<?php
					$tmp = 0;
					$x = 0;
					?>
					<h6 class="mt-5 text-center text-uppercase fw-bold">Susunan Kepanitiaan <?= $kegiatan ?></h6>
					<h6 class="text-center text-uppercase fw-bold">HIMPUNAN MAHASISWA JURUSAN ILMU KOMPUTER (HIMAKOM)
					</h6>
					<h6 class="text-center text-uppercase fw-bold">Periode 2022</h6>

					<h6 class="mt-5 text-uppercase fw-bold">Presidium Pelaksana</h6>
					<table class="table table-borderless table-responsive text-dark ff-gantari align-middle">
						<tr class="d-flex">
							<td class="col-4 lh-1">Ketua Pelaksana</td>
							<td class="col-1 lh-1">:</td>
							<td class="lh-1"><?= $ketua_pelaksana ?></td>
						</tr>
						<tr class="d-flex">
							<td class="col-4 lh-1">Sekretaris Pelaksana</td>
							<td class="col-1 lh-1">:</td>
							<td class="lh-1"><?= $sekretaris_pelaksana ?></td>
						</tr>
						<tr class="d-flex">
							<td class="col-4 lh-1">Bendahara Pelaksana</td>
							<td class="col-1 lh-1">:</td>
							<td class="lh-1"><?= $bendahara_pelaksana ?></td>
						</tr>
					</table>

					<?php foreach ($division as $div) : ?>
						<h6 class="mt-5 text-uppercase fw-bold"><?= $div ?></h6>
						<table class="table table-borderless table-responsive text-dark ff-gantari align-middle">
							<tr class="d-flex">
								<td class="col-4 lh-1">Koordinator</td>
								<td class="col-1 lh-1">:</td>
								<td class="lh-1"><?= $koor[$tmp] ?></td>
							</tr>
							<tr class="d-flex">
								<td class="col-4 lh-1">Sekretaris Koordinator</td>
								<td class="col-1 lh-1">:</td>
								<td class="lh-1"><?= $sekoor[$tmp] ?></td>
							</tr>
							<tr class="d-flex">
								<td class="lh-1"">Anggota</td>
						</tr>
						<?php $counter = 1; ?>
						<?php for ($x; $x < count($anggota); $x++) : ?>
						<?php if ($anggota[$x] == 'anggota') : ?>
						<?php $x++; ?>
						<?php break; ?>
						<?php else : ?>
						<tr class="d-flex">
							<td	class="lh-1"></td>
							<td class="lh-1"><?php echo $counter.". " ?></td>
							<td class="lh-1"><?= $anggota[$x] ?></td>
							<?php $counter++ ?>
						</tr>
						<?php endif; ?>
					<?php endfor; ?>
						</table>
						<?php $tmp++; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
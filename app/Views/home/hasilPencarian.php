<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>SIHIMA</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="/assets/img/himakom.png" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Gantari:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="/assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-dark">
	<div class="container-fluid position-relative d-flex p-0">
		<!-- Table Start -->
		<div class="container-fluid pt-4 px-4">
			<div class="row g-4">
				<div class="col-12">
					<div class="bg-secondary rounded h-100 p-4">
						<h5 class="my-3 ff-gantari">Hasil Pencarian</h5>
						<table class="table table-hover table-responsive text-tertiary ff-gantari align-middle">
							<thead>
								<tr>
									<th scope="col">Nama Anggota</th>
									<th scope="col">NPM</th>
									<th scope="col">Nama Bidang</th>
									<th scope="col">Prodi</th>
									<th scope="col">Periode</th>
								</tr>
							</thead>
							<?php if ($hasil != null) : ?>
							<?php foreach ($hasil as $hasil) : ?>
							<tbody>
								<tr>
									<td><?= $hasil['nama_anggota'] ?></td>
									<td><?= $hasil['npm'] ?></td>
									<td><?= $hasil['nama_bidang'] ?></td>
									<td><?= $hasil['nama_prodi'] ?></td>
									<td><?= $hasil['periode'] ?></td>
								</tr>
							</tbody>
							<caption>Total</caption>
						</table>
						<?php endforeach; ?>
						<?php else : ?>
						<h1>Maaf Data Tidak Ditemukan</h1>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Table End -->
	</div>
	<footer class="container-fluid pt-4 px-4">
		<div class="bg-secondary rounded-top p-4">
			<div class="row">
				<div class="col-12 col-sm-6 text-center text-sm-start text-tertiary ff-gantari">
					&copy; 2022 <a href="#">SIHIMA</a>, All Right Reserved.
				</div>
			</div>
		</div>
	</footer>

</body>
<!-- Content End -->

</html>
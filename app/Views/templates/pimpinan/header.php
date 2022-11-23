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

<body>
	<div class="container-fluid position-relative d-flex p-0">
		<!-- Sidebar Start -->
		<div class="sidebar pe-4 py-3">
			<nav class="navbar bg-secondary navbar-dark">
				<div class="d-flex align-items-center ms-4 mb-4">
					<div class="position-relative">
						<img class="rounded-circle mb-2" src="/assets/img/himakom.png" style="height: 30px;">
					</div>
					<a href="">
						<h3 class="ff-gantari ms-2"></i>SIHIMA</h3>
					</a>
				</div>
				<div class="d-flex align-items-center ms-4 mt-2 mb-4">
					<div class="position-relative">
						<img class="rounded-circle" src="/assets/img/cat.jpg" style="width: 40px; height: 40px;">
						<div
							class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
						</div>
					</div>
					<div class="ms-3">
						<h6 class="mb-0 ff-gantari">Kucing</h6>
						<span class="ff-gantari">Admin</span>
					</div>
				</div>
				<div class="navbar-nav w-100">
					<a href="" class="nav-item nav-link active ff-gantari"><i class="fa fa-table me-2"></i>Tabel</a>
				</div>
			</nav>
		</div>
		<!-- Sidebar End -->


		<!-- Content Start -->
		<div class="content">
			<!-- Navbar Start -->
			<nav class="navbar navbar-expand bg-dark navbar-dark sticky-top px-4 py-3">
				<a href="" class="navbar-brand d-flex d-lg-none me-4">
				</a>
				<a href="#" class="sidebar-toggler flex-shrink-0">
					<i class="fa fa-bars"></i>
				</a>
				<form class="d-none d-md-flex ms-4">
					<input class="form-control bg-dark border-0" type="search" placeholder="Search">
				</form>
				<div class="navbar-nav align-items-center ms-auto">
				</div>
			</nav>
			<!-- Navbar End -->

			<!-- Sidebar Start -->
			<div class="container-fluid position-relative d-flex p-0">
				<div class="sidebar pe-4 py-3">
					<nav class="navbar bg-secondary navbar-dark">
						<div class="d-flex align-items-center ms-4 mb-4">
							<div class="position-relative">
								<img class="rounded-circle mb-2" src="/assets/img/himakom.png" style="height: 30px;">
							</div>
							<a href="" class="text-decoration-none">
								<h3 class="ff-gantari ms-2 fw-bold text-primary"></i>SIHIMA</h3>
							</a>
						</div>
						<div class="d-flex align-items-center ms-4 mt-2 mb-4">
							<div class="position-relative">
								<img class="rounded-circle" src="/assets/img/cat-who.jpg"
									style="width: 40px; height: 40px;">
								<div
									class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
								</div>
							</div>
							<div class="ms-3">
								<h6 class="mb-0 ff-gantari">Kucing</h6>
								<span class="ff-gantari text-white-50">Pimpinan</span>
							</div>
						</div>

						<div class="navbar-nav w-100">
							<a href="/test" class="<?= "nav-itemgitu nav-link ff-gantari" ?>"><i
									class="bi bi-person-lines-fill me-2"></i>Pengurus</a>
						</div>
						<div class="navbar-nav w-100">
							<a href="/listLaporan" class="<?= "nav-itemgitu nav-link ff-gantari" ?>"><i
									class="bi bi-person-lines-fill me-2"></i>Laporan</a>
						</div>
						<div class="navbar-nav w-100">
							<a href="/logoutPimpinan" class="<?= "nav-itemgitu nav-link ff-gantari" ?>"><i
									class="bi bi-person-lines-fill me-2"></i>Log Out</a>
						</div>

					</nav>
				</div>
				<?= $this->renderSection('content') ?>
			</div>
		</div>
	</div>
	<!-- Navbar End -->
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="lib/chart/chart.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/waypoints/waypoints.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/tempusdominus/js/moment.min.js"></script>
	<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>

	<!-- Template Javascript -->
	<script src="js/main.js"></script>

</body>
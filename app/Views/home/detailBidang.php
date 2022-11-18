<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>SIHIMA</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assetsHome/DevFolio/assets/img/favicon.png') ?>" rel="icon">
	<link href="<?= base_url('assetsHome/DevFolio/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assetsHome/DevFolio/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assetsHome/DevFolio/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>"
		rel="stylesheet">
	<link href="<?= base_url('assetsHome/DevFolio/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
	<link href="<? base_url('assetsHome/DevFolio/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assetsHome/DevFolio/assets/css/style.css') ?>" rel="stylesheet">

	<!-- =======================================================
</head>

<body>

  
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="/">SIHIMA</a></h1>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto " href="/viewKeanggotaan">Cari Keanggotaan</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<div class="hero hero-single route bg-image"
		style="background-image: url(<?= base_url('assets/img/overlay-bg.jpg') ?>)">
		<div class="overlay-mf"></div>
		<div class="hero-content display-table">
			<div class="table-cell">
				<div class="container">
					<h2 class="hero-title mb-4"><?= $bidang['nama_bidang'] ?></h2>
					<ol class="breadcrumb d-flex justify-content-center">
						<li class="breadcrumb-item">
							<a href="#">Home</a>
						</li>
						<li class="breadcrumb-item active"><?= $bidang['nama_bidang'] ?></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<main id="main">
		<section id="portfolio-details" class="portfolio-details">
			<div class="container">

				<div class="row g-4 my-4">

					<div class="col-4">
						<img src="/assets/img/logoBidang/<?= $bidang['logo_bidang'] ?>" alt="Avatar">
					</div>

					<div class="col-1">

					</div>

					<div class="col-5">
						<div class="portfolio-info">
							<h4><b>Informasi Bidang</b></h4>
							<?php if ($bidang['id_bidang'] != '1') : ?>
							<div class="portfolio-description">
								<h5><b>Kepala Bidang: </b><?= $kepala_bidang['nama_anggota'] ?></h5>
							</div>
							<?php elseif ($bidang['id_bidang'] == '1') :   ?>
							<div class="portfolio-description">
								<h5><b>Ketua Umum: </b><?= $ketua_umum['nama_anggota'] ?></h5>

							</div>
							<?php endif; ?>
							<ul>
								<li class="text-justify"><strong>Visi</strong><br><?= $bidang['visi'] ?></li>
								<li class="text-justify"><strong>Misi</strong><br><?= $bidang['misi'] ?></li>
								<li class="text-justify"><strong>Total Anggota</strong>: <?= $totalAnggota ?></li>
								<li class="text-justify"><strong>Total Program Kerja</strong>: <?= $totalProgja ?></li>
							</ul>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End <?= $bidang['nama_bidang'] ?> Section -->

	</main><!-- End #main -->

	<!-- ======= Footer =======	 -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="copyright-box">
						<p class="copyright">&copy; Copyright <strong>SIHIMA</strong>. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- End  Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assetsHome/DevFolio/assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
	<script src="<?= base_url('assetsHome/DevFolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assetsHome/DevFolio/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
	<script src="<?= base_url('assetsHome/DevFolio/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
	<script src="<?= base_url('assetsHome/DevFolio/assets/vendor/typed.js/typed.min.js') ?>"></script>
	<script src="<?= base_url('assetsHome/DevFolio/assets/vendor/php-email-form/validate.js') ?>"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assetsHome/DevFolio/assets/js/main.js') ?>"></script>

	</body>

</html>
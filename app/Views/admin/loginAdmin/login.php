<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>SIHIMA - Login</title>
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

<body class="ff-gantari">
	<div class="container-fluid position-relative d-flex p-0 bg-dark">
		<!-- Start -->
		<div class="container-fluid">
			<div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
				<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5">
					<div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3 text-white">
						<div class="d-flex align-items-center justify-content-between mb-4">
							<div class="d-flex">
								<div class="position-relative">
									<img class="rounded-circle mb-2" src="/assets/img/himakom.png"
										style="height: 30px;">
								</div>
								<a href="/" class="text-decoration-none">
									<h3 class="ff-gantari ms-2 fw-bold text-primary"></i>SIHIMA</h3>
								</a>
							</div>
							<h3>Masuk</h3>
						</div>
						<form action="/verifyLogin" method="post">
							<div class="form-floating mb-3">
								<input required class="form-control text-white" type="email" id="email" name="email">
								<label for="email">E-mail</label>
							</div>
							<div class="form-floating mb-3">
								<input required class="form-control text-white" type="password" id="password"
									name="password">
								<label for="password">Kata Sandi</label>
							</div>
							<button type="submit" class="btn btn-primary py-3 w-100 mb-4 text-dark">Masuk</button>
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- End -->
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="lib/chart/chart.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/waypoints/waypoints.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/tempusdominus/js/moment.min.js"></script>
	<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Template Javascript -->
	<script src="js/main.js"></script>
</body>

</html>
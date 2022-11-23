<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIHIMA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assetsHome/DevFolio/assets/img/favicon.png" rel="icon">
    <link href="assetsHome/DevFolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assetsHome/DevFolio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetsHome/DevFolio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetsHome/DevFolio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetsHome/DevFolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assetsHome/DevFolio/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
</head>

<body>

	<!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">SIHIMA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assetsHome/DevFolio/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="/viewKeanggotaan">Cari Keanggotaan</a></li>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Bidang, Biro, dan Badan</a></li>
                    <li><a class="nav-link scrollto " href="#work">Program Kerja</a></li>
                    <li class="dropdown"><a href="#"><span class="text-primary">Log In</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="loginAdmin">Administrator</a></li>
                            <li><a href="loginPimpinan">Pimpinan Bidang</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
										class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Deep Drop Down 1</a></li>
									<li><a href="#">Deep Drop Down 2</a></li>
									<li><a href="#">Deep Drop Down 3</a></li>
									<li><a href="#">Deep Drop Down 4</a></li>
									<li><a href="#">Deep Drop Down 5</a></li>
								</ul>
							</li> -->
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image"
        style="background-image: url(assetsHome/DevFolio/assets/img/himakomBG.png)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">SIHIMA</h1>
                    <p class="hero-subtitle"><span class="typed"
                            data-typed-items="Sistem Informasi Himpunan Mahasiswa"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="assetsHome/DevFolio/assets/img/himakomplong.png"
                                                    class="img-fluid rounded b-shadow-a" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <p><span class="title-s">Nama Organisasi: </span> <span>Himakom</span>
                                                </p>
                                                <!-- <p><span class="title-s">Profile: </span> <span>full stack developer</span></p> -->
                                                <p><span class="title-s">Email: </span> <span>https://himakom.fmipa.unila.ac.id/</span>
                                                </p>
                                                <!-- <p><span class="title-s">Phone: </span> <span>(617) 557-0089</span></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s">Himakom Universitas Lampung</p>
                                        <span class="fw-bold">Visi</span>
                                        <div class="service-content">
                                            <p class="s-description">
                                                <?= $bidang[0]['visi'] ?>
                                            </p>
                                        </div>
                                        <span class="fw-bold">Misi</span>
                                        <div class="service-content">
                                            <p class="s-description">
                                                <?= $bidang[0]['misi'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                About Us
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            Himakom Universitas Lampung Merupakan sebuah Organisasi yang ada di Jurusam Ilmu Komputer Fakultas Matematika dan Ilmu Pengetahuan Alam di Universitas Lampung.
                                        </p>
                                        <!-- <p class="lead">
                                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus
                                            suscipit tortor eget felis
                                            porttitor volutpat. Vestibulum
                                            ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Bidang, Biro dan Badan
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="row">
                        <?php foreach ($bidang as $bidang) : ?>
                        <div class="col-md-4">
                            <?php if ($bidang['id_bidang'] != '1000') : ?>
                            <div class="service-box">
                                
                                <div class="service-ico">
                                    <span class="ico-circle"><img
                                            src="/assets/img/logoBidang/<?= $bidang['logo_bidang'] ?>" alt="Avatar"
                                            style="width:60px;height:60px;"></i></span>
                                </div>
                                
                                <div class="service-content">
                                    <h2 class="s-title mt-4 mb-3"><?= $bidang['nama_bidang'] ?></h2>
                                    <p class="s-description text-center">
                                        <?= $bidang['visi'] ?>
                                    </p>
                                </div>
                                <div class="service-content">
                                        <div class="w-like">
                                            <a href="/detail_bidang/<?= $bidang['id_bidang'] ?>"> <span
                                                    class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                            </div>
							
							<?php elseif ($bidang['id_bidang']==='1000'):   ?>
								<?php endif; ?>

                        </div>
						
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counter Section ======= -->
        <!-- <div class="section-counter paralax-mf bg-image" style="background-image: url(assetsHome/DevFolio/assets/img/counters-bg.jpg)"> -->
        <div class="section-counter paralax-mf bg-image"
            style="background-image: url(assetsHome/DevFolio/assets/img/counters-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="<?= $totalAnggota ?>"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">TOTAL PENGURUS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-award"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="<?= $totalProgja - 1 ?>"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">TOTAL PROGRAM KERJA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-person-rolodex"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="<?= $totalBidang - 1 ?>"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">TOTAL BIDANG, BIRO, dan BADAN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Counter Section -->

        <!-- ======= Program Kerja Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Program Kerja
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($progja as $progja) : ?>
                    <?php if ($progja['id_status_kepanitiaan'] != "1") : ?>

                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="assetsHome/DevFolio/assets/img/work-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="/assets/img/logoBidang/<?= $progja['logo_bidang'] ?>" alt=""
                                        class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title"><?= $progja["nama_kepanitiaan"] ?></h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"><?= $progja["nama_bidang"] ?></span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- End Portfolio Section -->
        <!-- ======= Contact Section ======= -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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
    <script src="assetsHome/DevFolio/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assetsHome/DevFolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsHome/DevFolio/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetsHome/DevFolio/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetsHome/DevFolio/assets/vendor/typed.js/typed.min.js"></script>
    <script src="assetsHome/DevFolio/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetsHome/DevFolio/assets/js/main.js"></script>

    </body>

</html>
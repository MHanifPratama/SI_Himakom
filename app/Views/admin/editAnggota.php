<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>
    <meta charset="utf-8">
    <title>SIHIMA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gantari:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
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
                    <input class="form-control bg-dark border-0 ff-gantari" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h5 class="mb-4 ff-gantari">Edit Anggota</h5>
                            <form action="/update/<?= $Biodata['id_anggota'] ?>" method="post">
                                <div class="form-floating border-0 mb-3 ff-gantari">
                                    <input type="text" class="form-control text-light" id="nama_anggota" name="nama_anggota" value="<?= $Biodata['nama_anggota'] ?>">
                                    <label for="nama_anggota">Nama Lengkap</label>
                                </div>
                                <div class="form-floating border-0 mb-3 ff-gantari">
                                    <input type="text" class="form-control text-light" id="npm" value="<?= $Biodata['npm'] ?>">
                                    <label for="npm">NPM</label>
                                </div>
                                <div class="form-floating border-0 mb-3 ff-gantari">
                                    <select class="form-select text-light" id="bidang" aria-label="Bidang">
                                        <?php foreach ($Bidang as $bidang) : ?>
                                            <option value="<?= $bidang['id_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="bidang">Bidang</label>
                                </div>
                                <div class="form-floating border-0 mb-3 ff-gantari">
                                    <select class="form-select text-light" id="prodi" aria-label="Prodi">
                                        <?php foreach ($Prodi as $prodi) : ?>
                                            <option value="<?= $prodi['id_prodi'] ?>"><?= $prodi['nama_prodi'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="prodi">Prodi</label>
                                </div>
                                <div class="form-floating border-0 mb-3 ff-gantari">
                                    <select class="form-select text-light" id="status_jabatan" aria-label="Status Jabatan">
                                        <?php foreach ($Jabatan as $jabatan) : ?>
                                            <option value="<?= $jabatan['id_jabatan'] ?>"><?= $jabatan['nama_jabatan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="status_jabatan">Prodi</label>
                                </div>
                                <div class="form-floating border-0 mb-3 ff-gantari">
                                    <input type="text" class="form-control text-light" id="periode" name="periode" value="<?= $Biodata['periode'] ?>">
                                    <label for="periode">Periode</label>
                                </div>
                                <button type="submit" class="btn btn-dark ff-gantari"><i class="fa fa-paper-plane"></i> Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Footer Start -->
                    <footer class="container-fluid pt-4 px-4">
                        <div class="bg-secondary rounded-top p-4">
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center text-sm-start text-tertiary ff-gantari">
                                    &copy; 2022 <a href="#">SIHIMA</a>, All Right Reserved.
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer End -->
                </div>
            </div>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-light btn-lg-square back-to-top"><i class="bi bi-arrow-up text-dark"></i></a>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
=======
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/update/<?=$Biodata['id_anggota']?>" method="post">
            <label for="nama_anggota">Nama Anggota</label>
            <input type="text" name = "nama_anggota" id="nama_anggota" value="<?=$Biodata['nama_anggota']?>">
            <label for="npm">NPM</label>
            <input type="text" name = "npm" id="npm" value="<?=$Biodata['npm']?>">
            <label for="bidang">Bidang</label>
            <select type="text" name = "bidang" id="bidang">
                <?php foreach ($Bidang as $bidang):?>
                    <?php if ($bidang['id_bidang'] == $Biodata['id_bidang']):?>
                        <option selected value="<?=$bidang['id_bidang']?>"><?=$bidang['nama_bidang']?></option>
                    <?php else:?>
                        <option value="<?=$bidang['id_bidang']?>"><?=$bidang['nama_bidang']?></option>
                    <?php endif?>
                <?php endforeach; ?>
            </select>
            <label for="prodi">Prodi</label>
            <select type="text" name = "prodi" id="prodi">
                <?php foreach ($Prodi as $prodi):?>
                    <?php if ($prodi['id_prodi'] == $Biodata['id_prodi']):?>
                        <option selected value="<?=$prodi['id_prodi']?>"><?=$prodi['nama_prodi']?></option>
                    <?php else:?>
                        <option value="<?=$prodi['id_prodi']?>"><?=$prodi['nama_prodi']?></option>
                    <?php endif?>
                <?php endforeach; ?>
            </select>
            <label for="status_jabatan">Status Jabatan</label>
            <select type="text" name = "status_jabatan" id="status_jabatan">
                <?php foreach ($Jabatan as $jabatan):?>
                    <?php if ($jabatan['id_jabatan'] == $Biodata['id_jabatan']):?>
                        <option selected value="<?=$jabatan['id_jabatan']?>"><?=$jabatan['nama_jabatan']?></option>
                    <?php else:?>
                        <option value="<?=$jabatan['id_jabatan']?>"><?=$jabatan['nama_jabatan']?></option>
                    <?php endif?>
                <?php endforeach; ?>
            </select>
            <label for="periode">Periode</label>
            <input type="text" name = "periode" id="periode" value="<?=$Biodata['periode']?>">
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
    </form>
>>>>>>> c642b0e7a4cf6065bdc6f9297b0c2bd20b7c7c33
</body>

</html>
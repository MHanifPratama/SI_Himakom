<?= $this->extend('templates/header') ?>
<!-- include libraries(jQuery, bootstrap) -->
<!-- Content Start -->
<div class="content">

    <?= $this->section('content') ?>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4 ff-gantari">Tambah Anggota</h5>
                    <form action="/simpan_bidang" method="post" enctype="multipart/form-data">
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <input type="text" class="form-control text-light" id="nama_bidang" name="nama_bidang">
                            <label for="nama_bidang">Nama Bidang</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <textarea   class="form-control text-light" id="visi" name="visi"></textarea>
                            <label for="visi">Visi</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <textarea  class="form-control text-light" id="misi" name="misi"></textarea>
                            <label for="misi">Misi</label>
                        </div>
                        <div class=" border-0 mb-3 text-tertiary ff-gantari" >
                            <label for="formFile" class="form-label">Upload Logo Bidang</label>
                            <input class="form-control" type="file" id="logo_bidang" name="logo_bidang">
                        </div>
                        <button type="submit" class="btn btn-primary text-dark ff-gantari"><i class="fa fa-paper-plane"></i> Submit</button>
                    </form>
                </div>
            </div>
            <!-- Footer Start -->
            <footer class="container-fluid">
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
<?= $this->endSection() ?>

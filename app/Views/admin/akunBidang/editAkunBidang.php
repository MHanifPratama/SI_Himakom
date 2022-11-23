<?= $this->extend('templates/header') ?>
<!-- Content Start -->
<div class="content">

    <?= $this->section('content') ?>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4 ff-gantari">Tambah Anggota</h5>
                    <form action="/updateAkunBidang/<?=$akun_bidang['id_akun_bidang']?>" method="post">
                    <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" id="id_bidang" name="id_bidang" aria-label="Bidang">
                                <?php foreach ($Bidang as $bidang) : ?>
                                    <?php if ($bidang['id_bidang'] == $akun_bidang['id_bidang']) : ?>
                                        <option selected value="<?= $bidang['id_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $bidang['id_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                            <label for="bidang">Bidang</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <input type="text" class="form-control text-light" id="username" name="username" value="<?=$akun_bidang['username']?>">
                            <label for="nama_anggota">Username</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <input type="text" class="form-control text-light" name="password" id="password">
                            <label for="npm">New Password</label>
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
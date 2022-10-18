<?= $this->extend('templates/header') ?>
<!-- Content Start -->
<div class="content">

    <?= $this->section('content') ?>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4 ff-gantari">Tambah Anggota</h5>
                    <form action="/simpan" method="post">
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <input type="text" class="form-control text-light" id="nama_anggota" name="nama_anggota">
                            <label for="nama_anggota">Nama Lengkap</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <input type="text" class="form-control text-light" name="npm" id="npm">
                            <label for="npm">NPM</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" type="text" name="bidang" id="bidang">
                                <?php foreach ($Bidang as $bidang) : ?>
                                    <option value="<?= $bidang['id_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="bidang">Bidang</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" type="text" name="prodi" id="prodi">
                                <?php foreach ($Prodi as $prodi) : ?>
                                    <option value="<?= $prodi['id_prodi'] ?>"><?= $prodi['nama_prodi'] ?></option>
                                <?php endforeach; ?>

                            </select>
                            <label for="prodi">Prodi</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" type="text" name="status_jabatan" id="status_jabatan">
                                <?php foreach ($Jabatan as $jabatan) : ?>
                                    <option value="<?= $jabatan['id_jabatan'] ?>"><?= $jabatan['nama_jabatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="status_jabatan">Status Jabatan</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <input type="text" class="form-control text-light" id="periode" name="periode">
                            <label for="periode">Periode</label>
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
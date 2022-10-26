<?= $this->extend('templates/pimpinan/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid mt-4 mx-4">
	<div class="row g-4">
		<div class="col-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h5 class="mb-4 ff-gantari">Laporan</h5>
				<form action="" method="post">
					<div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
						<select class="form-select text-light" id="laporan" name="laporan" aria-label="Laporan">
							<option value="">SK Kepanitiaan</option>
						</select>
						<label for="laporan">Jenis Laporan</label>
					</div>
					<button disabled type="submit" class="btn btn-primary text-dark ff-gantari"><i class="fa fa-print"></i> Cetak</button>
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

<?= $this->endSection() ?>
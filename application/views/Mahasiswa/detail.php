<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Detail Data Mahasiswa
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
					<p class="card-text">
						<label for=""><b>No HP :</b></label>
						<?= $mahasiswa['no_hp'] ?>
					</p>
					<p class="card-text">
						<label for=""><b>NIM :</b></label>
						<?= $mahasiswa['NIM'] ?>
					</p>
					<p class="card-text">
						<label for=""><b>Jenis Kelamin :</b></label>
						<?= $mahasiswa['kelamin'] ?>
					</p>
					<a href="<?= base_url('Mahasiswa') ?>" class="btn btn-primary">kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
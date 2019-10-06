<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Detail Data Siswa
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $siswa['Nama'] ?></h5>
					<p class="card-text">
						<label for=""><b>Nama :</b></label>
						<?= $siswa['Nama'] ?>
					</p>
					<p class="card-text">
						<label for=""><b>NIM :</b></label>
						<?= $siswa['NIM'] ?>
					</p>
					<p class="card-text">
						<label for=""><b>Alamat :</b></label>
						<?= $siswa['Alamat'] ?>
					</p>
					<a href="<?= base_url('Siswa') ?>" class="btn btn-primary">kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
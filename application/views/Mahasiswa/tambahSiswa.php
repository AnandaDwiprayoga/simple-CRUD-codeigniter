<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Siswa
				</div>
				<div class="card-body">
					<form action="<?= base_url("Siswa/tambah_siswa") ?>" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
							<?= form_error('nama','<small class="text-danger">','</small>') ?>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" class="form-control" ><?= set_value('alamat') ?></textarea>
							<?= form_error('alamat','<small class="text-danger">','</small>') ?>
						</div>
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim') ?>">
							<?= form_error('nim','<small class="text-danger">','</small>') ?>
						</div>
						<button type="submit" class="btn btn-primary float-right">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
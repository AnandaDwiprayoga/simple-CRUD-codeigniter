<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Edit Data Siswa
				</div>
				<div class="card-body">
					<form action="<?= base_url("Siswa/edit/") ?><?= $siswa['id'] ?>" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['Nama'] ?>">
							<?= form_error('nama','<small class="text-danger">','</small>') ?>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" class="form-control" ><?= $siswa['Alamat'] ?></textarea>
							<?= form_error('alamat','<small class="text-danger">','</small>') ?>
						</div>
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim" value="<?= $siswa['NIM'] ?>">
							<?= form_error('nim','<small class="text-danger">','</small>') ?>
						</div>
						<button type="submit" class="btn btn-primary float-right">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
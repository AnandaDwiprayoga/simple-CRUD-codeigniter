<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<small class="text-danger"><?= validation_errors() ?></small>
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
						</div>
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim') ?>">
						</div>
						<div class="form-group">
							<label for="no_hp">No HP</label>
							<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= set_value('text') ?>">
						</div>
						<div class="form-group">
							<label for="kelamin">Jenis Kelamin</label>
							<select name="kelamin" id="kelamin" class="form-control">
								<option selected="">-----</option>
								<option value="L">Laki-Laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary float-right">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
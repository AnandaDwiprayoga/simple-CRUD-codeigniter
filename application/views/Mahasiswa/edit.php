<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<small class="text-danger"><?= validation_errors() ?></small>
					<form action="<?= base_url('Mahasiswa/edit/') ?><?= $mahasiswa['NIM'] ?>" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
						</div>
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['NIM'] ?>">
						</div>
						<div class="form-group">
							<label for="no_hp">No HP</label>
							<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $mahasiswa['no_hp'] ?>">
						</div>
						<div class="form-group">
							<label for="kelamin">Jenis Kelamin</label>
							<select name="kelamin" id="kelamin" class="form-control">
								<option selected="">-----</option>
								<option value="L" <?php if($mahasiswa['kelamin'] == 'L') echo "selected"; ?>>Laki-Laki</option>
								<option value="P" <?php if($mahasiswa['kelamin'] == 'P') echo "selected"; ?>>Perempuan</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary float-right">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
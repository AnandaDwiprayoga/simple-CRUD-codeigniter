<div class="container">
	<div class="row mt-4">
		<div class="col-md-6">
			<a href="<?= base_url('Mahasiswa/tambah') ?>" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="<?= base_url() ?>mahasiswa" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" value="<?= set_value('keyword') ?>" placeholder="Cari Data Mahasiswa" name="keyword">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
	<?= $this->session->flashdata('update'); ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Daftar Mahasiswa</h2>
		<ul class="list-group">
			<?php if(empty($mahasiswa)):  ?>
				<div class="alert alert-danger" role="alert">
				  No data found
				</div>
			<?php endif ?>
		 	<?php foreach($mahasiswa as $mhs) : ?>
			  <li href="#" class="list-group-item ">
			  	<?= $mhs['nama'] ?>
			  	<a href="<?= base_url(); ?>Mahasiswa/hapus/<?= $mhs['NIM'] ?>" class="badge float-right badge-danger ml-2" onclick="return confirm('Yakin data ini akan dihapus?')">Hapus</a>
			  	<a href="<?= base_url(); ?>Mahasiswa/edit/<?= $mhs['NIM'] ?>" class="badge float-right badge-primary ml-2" >Edit</a>
			  	<a href="<?= base_url(); ?>Mahasiswa/detail/<?= $mhs['NIM'] ?>" class="badge float-right badge-success" >Detail</a>
			  </li>
		  	<?php endforeach; ?>
		</ul>
		</div>
	</div>
</div>
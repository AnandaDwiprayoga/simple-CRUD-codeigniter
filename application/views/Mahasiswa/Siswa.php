<div class="container">
	<h1>Nama Siswa</h1>
	<?= $this->session->flashdata('hapusSiswa'); ?>
	<?= $this->session->flashdata('updateSiswa'); ?>
	<?= $this->session->flashdata('siswa_tambah'); ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="<?= base_url('Siswa') ?>" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" value="<?= set_value('keyword') ?>" placeholder="Cari Data Mahasiswa" name="keyword">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
	<?php if(empty($siswa)) :?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Siswa <?= set_value('keyword') ?><strong> Tidak ditemukan</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php endif; ?>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">NIM</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $no=1; foreach($siswa as $sw) : ?>
		    <tr>
		      <th scope="row"><?= $no ?></th>
		      <td><?= $sw['Nama'] ?></td>
		      <td><?= $sw['Alamat'] ?></td>
		      <td><?= $sw['NIM'] ?></td>
		      <td>
		      	<a href="<?= base_url('Siswa/hapus/' . $sw['id']) ?>" class="badge badge-danger" onclick="return confirm('Hapus data ini ?')">Hapus</a>
		      	<a href="<?= base_url('Siswa/edit/' . $sw['id']) ?>" class="badge badge-warning" o>Edit</a>
		      	<a href="<?= base_url('Siswa/detail/' . $sw['id']) ?>" class="badge badge-secondary">Detail</a>
		      </td>
		    </tr>
		<?php $no++;endforeach ?>
	  </tbody>
	</table>
	<a href="<?= base_url('Siswa/tambah_siswa') ?>" class="btn btn-primary float-right">+Tambah Data</a>	
</div>
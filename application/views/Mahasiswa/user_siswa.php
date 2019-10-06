<h1>Ini halaman User</h1>

<h1>Hello, <?= $this->session->userdata('level') ?></h1>
<a href="<?= base_url('Login/logout') ?>">Logout</a>


<div class="container mb-5" style="margin-top: 20px">
	<div class="col-md-12">
		<h1 style="text-align: center;margin-bottom: 30px">Data Siswa</h1>
	</div>
	<table class="table table-striped" id="List_mhs">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>NIM</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no=1;
				foreach($mahasiswa as $mhs) :
			 ?>
			 <tr>
			 	<td><?= $no ?></td>
			 	<td><?= $mhs->Nama ?></td>
			 	<td><?= $mhs->Alamat ?></td>
			 	<td><?= $mhs->NIM ?></td>
			 </tr>
			 <?php $no++; endforeach; ?>
		</tbody>
	</table>
</div>
<h1>Ini halaman User</h1>

<h1>Hello, <?= $this->session->userdata('level') ?></h1>
<a href="<?= base_url('Login/logout') ?>">Logout</a>


<div class="container mb-5" style="margin-top: 20px">
	<div class="col-md-12">
		<h1 style="text-align: center;margin-bottom: 30px">Data Mahasiswa</h1>
	</div>
	<table class="table table-striped" id="List_mhs">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>No Hp</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no=1;
				foreach($mahasiswa as $mhs) :
			 ?>
			 <tr>
			 	<td><?= $no ?></td>
			 	<td><?= $mhs->nama ?></td>
			 	<td><?= $mhs->NIM ?></td>
			 	<td><?= $mhs->no_hp ?></td>
			 </tr>
			 <?php $no++; endforeach; ?>
		</tbody>
	</table>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Report Table</title>
	<style>
		#tablequ {
			padding: 20px;
			border: 1px solid #e3e3e3;
			width: 600px;
			border-radius: 5px
		}

		.short {
			width: 50px;
		}
		.normal {
			width: 150px;
		}

		table{
			border-collapse: collapse;
			font-family: arial;
			color: #5e5b5c;
		}

		thead th {
			text-align: left;
			padding: 10px;
		}
		tbody td {
			border-top: 1px solid #e3e3e3;
			padding: 10px;
		}

		tbody tr:nth-child even {
			background: #f6f5fa;
		}
		tbody tr:hover{
			background: #EAE9F5;
		}
	</style>
</head>
<body>
	<div id="tablequ">
		<table>
			<thead>
				<tr>
					<th class="short">#</th>
					<th class="normal">Nama</th>
					<th class="normal">NIM</th>
					<th class="normal">Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?= $no = 1; ?>
				<?php foreach($siswa as $mhs) :?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $mhs->Nama ?></td>
						<td><?= $mhs->NIM ?></td>
						<td><?= $mhs->Alamat?></td>
					</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>

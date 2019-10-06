<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ini adalah view</title>
</head>
<body>
	<table border="1px" t>	
		<?php  ?>
		<tr>	
			<th>NIM</th>
			<th>Nama</th>
			<th>Password</th>
			<th>profil</th>
			<th>No HP</th>
			<th></th>
		</tr>
		<?php 	foreach($mahasiswa as $mhs) : ?>
			<tr>	
				<td><?= $mhs['NIM']  ?></td>
				<td><?= $mhs['nama'] ?></td>
				<td><?= $mhs['password'] ?></td>
				<td><img src="<?= $mhs['profil'] ?>" alt=""></td>
				<td><?= $mhs['no_hp'] ?></td>
			</tr>
		<?php 	endforeach; ?>
	</table>
</body>
</html>
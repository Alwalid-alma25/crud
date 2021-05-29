<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
</head>
<body>
<center>
	<h2>Simple CRUD</h2>
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>tiket</h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
		<th>no_tiket</th>
		<th>judul_film</th>
		<th>tanggal</th>
		<th>kursi</th>
		<th>studio</th>
	</tr>
	<?php
	include('koneksi.php');
	$koneksi = mysqli_connect('localhost', 'root','','crud_sbd');
	$query = mysqli_query($koneksi, "SELECT *FROM tiket ORDER BY judul_film ASC") or die(mysqli_error($koneksi));
	if(mysqli_num_rows($query)== 0) {
		echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
	}else{
		$no = "";
		while($data = mysqli_fetch_assoc($query)){
				echo '<tr>';
				echo '<td>'.$data['no_tiket'].'</td>';
				echo '<td>'.$data['judul_film'].'</td>';
				echo '<td>'.$data['tanggal'].'</td>';
				echo '<td>'.$data['kursi'].'</td>';
				echo '<td>'.$data['studio'].'</td>';
				echo '<td><a href="edit.php?id='.$data['no_tiket'].'">Edit</a> / <a href="hapus.php?id='.$data['no_tiket'].'" onclick="return confirm(\'Yakin?\')">hapus</a></td>';
				echo '</tr>';
				$no++;
			}
		}		
		?>
</table>
</center>
</body>
</html>

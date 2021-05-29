<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
</head>
<body>
<center>
	<h2>Simple CRUD</h2>
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>Edit Data tiket</h3>
<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$koneksi = mysqli_connect('localhost', 'root','','crud_sbd');
	$show = mysqli_query($koneksi, "SELECT * FROM tiket WHERE no_tiket='$id'") or die(mysqli_error($koneksi));
	if(mysqli_num_rows($show) == 0){
	echo '<script>window.history.back()</script>';
}else{
$data = mysqli_fetch_assoc($show);
}
?>
	<form action="proses_edit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table cellpadding="3" cellspacing="0">
<tr>
	<td>No_tiket</td>
	<td>:</td>
	<td><input type="text" name="no_tiket" value="<?php echo $data['no_tiket']; ?>" required></td>
	</tr>
	<tr>
	
	<td>judul film</td>
	<td>:</td>
	<td><input type="text" name="judul_film" size="50" value="<?php echo $data['judul_film']; ?>" required></td>
	</tr>
	<tr>
	
	<td>tanggal</td>
	<td>:</td>
	<td><input type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>" required></td>
	</tr>
	<tr>
	
	<td>kursi</td>
	<td>:</td>
	<td><input type="text" name="kursi" size="10" value="<?php echo $data['kursi']; ?>" required></td>
	</tr>
	</td>
	</tr>
	<tr>
	
	<td>studio</td>
	<td>:</td>
	<td><input type="text" name="studio" size="10" value="<?php echo $data['studio']; ?>" required></td>
	</tr>
	</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
		</table>
	</form>
	</center>
	</body>
	</html>
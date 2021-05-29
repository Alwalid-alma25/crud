<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	</head>
	<body>
	<center>
		<h2>Simple CRUD</h2>
		<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
		<h3>Tambah Data tiket</h3>
	<form action="proses_tambah.php" method="post">
	<table cellpadding="3" cellspacing="0">
	<tr>
	<td>no tiket</td>
	<td>:</td>
	<td><input type="number_format" name="no_tiket" </td>
	</tr>
	<tr>
		<td>judul film</td>
		<td>:</td>
		<td><input type="text" name="nama" size="50" </td>
		</tr>
	<tr>
		<td>tanggal</td>
		<td>:</td>
		<td><input type="date" name="tanggal" </td>
		</tr>
		<tr>
		<td>kursi</td>
		<td>:</td>
		<td><input type="text" name="kursi" size="10"</td>
		</tr>
		<tr>
		<td>studio</td>
		<td>:</td>
		<td><input type="text" name="studio" size="10" </td>
		</tr>
		<tr>
		</select>
		</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td></td>
		<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
		</table>
</form>
</center>
</body>
</html>
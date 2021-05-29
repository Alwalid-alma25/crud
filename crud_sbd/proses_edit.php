<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
		$no_tiket = $_POST['no_tiket'];
		$judul_film = $_POST['judul_film'];
		$tanggal = $_POST['tanggal'];
		$kursi = $_POST['kursi'];
		$studio = $_POST['studio'];
$koneksi = mysqli_connect('localhost', 'root','','crud_sbd');		
$update = mysqli_query($koneksi, "UPDATE tiket SET no_tiket='$no_tiket', judul_film='$judul_film', tanggal='$tanggal', kursi='$kursi', studio='$studio'  WHERE no_tiket='$no_tiket'") or die(mysqli_error($koneksi));

if($update){
	echo 'Data berhasil di simpan! ';
	echo '<a href="index.php">Kembali</a>';
}else{
	echo 'Gagal menyimpan data! ';
	echo '<a href="edit.php?id='.$id.'">Kembali</a>';
}
}else{
	echo '<script>window.history.back()</script>';
}
?>
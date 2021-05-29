<?php
if(isset($_GET['no_tiket'])){
	include('koneksi.php');
	$no_tiket = $_GET['no_tiket'];
$koneksi = mysqli_connect('localhost', 'root','','crud_sbd');
$cek = mysqli_query($koneksi, "SELECT no_tiket FROM tiket WHERE no_tiket='id'") or die(mysqli_error($koneksi));
if(mysqli_num_rows($cek) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$del = mysqli_query($koneksi, "DELETE FROM tiket WHERE no_tiket='$no_tiket'");
if($del){
	echo 'Data tiket berhasil di hapus! ';
	echo '<a href="index.php">Kembali</a>';
}else{
	echo 'Gagal menghapus data! ';
	echo '<a href="index.php">Kembali</a>';
}
}
}else{
	echo '<script>window.history.back()</script>';
}
?>
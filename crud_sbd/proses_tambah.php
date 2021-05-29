<?php
if(isset($_POST['tambah'])){
		include('koneksi.php');
		$no_tiket 		= $_POST['no_tiket'];
		$judul_film 	= $_POST['judul_film'];
		$tanggal 		= $_POST['tanggal'];
		$kursi		 	= $_POST['kursi'];
		$studio 		= $_POST['studio'];
		$koneksi = mysqli_connect('localhost', 'root','','crud');
		$input = mysqli_query($koneksi, "INSERT INTO tiket VALUES('$no_tiket', '$judul_film', '$tanggal', '$kursi', '$studio')") or die(mysqli_error($koneksi));
		if($input){
			echo 'Data berhasil di tambahkan! ';
			echo '<a href="index.php">Kembali</a>';
		}else{
			echo 'Gagal menambahkan data! ';
			echo '<a href="tambah.php">Kembali</a>';
}
}else{
			echo '<script>window.history.back()</script>';
}
?>
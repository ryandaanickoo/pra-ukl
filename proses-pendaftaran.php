<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$merek = $_POST['merek'];
	$jumlah = $_POST['jumlah'];
	$kondisi = $_POST['kondisi'];

	// buat query
	$sql = "INSERT INTO barang (nama, merek, jumlah, kondisi) VALUE ('$nama', '$merek', '$jumlah', '$kondisi')";
	$query = mysqli_query($db, $sql);

	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		header('Location: index.php?status=gagal');
	}


} else {
	die("Akses dilarang... !!!");
}

?>

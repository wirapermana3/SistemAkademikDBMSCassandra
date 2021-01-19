<?php
// Panggil koneksi database
require_once "koneksi.php";

if (isset($_GET['nim'])) {
	$nim = isset($_GET['nim']) ? $_GET['nim'] : '';
	// perintah query untuk menghapus data pada tabel mahasiswa
	$statement = new Cassandra\SimpleStatement("DELETE FROM mahasiswa WHERE nim='$nim'");
	$result = $session->execute($statement);
	// cek hasil query
	if ($result) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: mahasiswa.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: mahasiswa.php?alert=1');
	}	
}						
?>
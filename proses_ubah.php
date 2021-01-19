<?php
// Panggil koneksi database
require_once "koneksi.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['nim'])) {
		$nim           = $_POST['nim'];
		$nama          = $_POST['nama'];
		$tempat_lahir  = $_POST['tempat_lahir'];
	
		$tanggal       = $_POST['tanggal_lahir'];
		$tgl           = explode('-',$tanggal);
		$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
	
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat        = $_POST['alamat'];
		$no_telepon    = $_POST['no_telepon'];
		//$kelas         = $_POST['kelas'];
		//$semester      = $_POST['semester'];
		//$nilai_ipk     = $_POST['nilai_ipk'];

		// perintah query untuk mengubah data pada tabel mahasiswa
		$statement = new Cassandra\SimpleStatement("UPDATE mahasiswa SET 
												  nama 			= '$nama',
												  tempat_lahir 	= '$tempat_lahir',
												  tanggal_lahir = '$tanggal_lahir',
												  jenis_kelamin = '$jenis_kelamin',
												  alamat 		= '$alamat',
												  no_telepon 	= '$no_telepon'
												  --kelas 		= '$kelas',
												  --semester      = '$semester',
												  --nilai_ipk     = $nilai_ipk
										    WHERE nim 			= '$nim'");		
		$result = $session->execute($statement);
		// cek query
		if ($result) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: mahasiswa.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: mahasiswa.php?alert=1');
		}				
	}
}		
?>
<?php
// Panggil koneksi database
require_once "koneksi.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['nim'])) {
		$nim           = $_POST['nim'];
		//$nama          = $_POST['nama'];
		//$tempat_lahir  = $_POST['tempat_lahir'];
	
		//$tanggal       = $_POST['tanggal_lahir'];
		//$tgl           = explode('-',$tanggal);
		//$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
	
		//$jenis_kelamin = $_POST['jenis_kelamin'];
		//$alamat        = $_POST['alamat'];
		//$no_telepon    = $_POST['no_telepon'];
		$kelas         = $_POST['kelas'];
		$semester      = $_POST['semester'];
		$nilai_ipk     = $_POST['nilai_ipk'];

		$dos_akdmk     = $_POST['dos_akdmk'];
		$sks_total     = $_POST['sks_total'];
		$sks_now       = $_POST['sks_now'];
		$sts_smt       = $_POST['sts_smt'];
		$sts_now       = $_POST['sts_now'];

		// perintah query untuk mengubah data pada tabel mahasiswa
		$statement = new Cassandra\SimpleStatement("UPDATE mahasiswa SET 
												  kelas			= '$kelas',
												  semester      = '$semester',
												  nilai_ipk		= $nilai_ipk,
												  dos_akdmk 	= '$dos_akdmk',
												  sts_smt       = '$sts_smt',
												  sts_now       = '$sts_now',
												  sks_total 	= $sks_total,
												  sks_now 		= $sks_now
										    WHERE nim 			= '$nim'");		
		$result = $session->execute($statement);
		// cek query
		if ($result) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: akademik.php?alert=2');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: akademik.php?alert=1');
		}				
	}
}		
?>
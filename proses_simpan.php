<?php
// Panggil koneksi database
require_once "koneksi.php";

if (isset($_POST['simpan'])) {
	$nim           = $_POST['nim'];
	$nama          = $_POST['nama'];
	$tempat_lahir  = $_POST['tempat_lahir'];

	$tanggal       = $_POST['tanggal_lahir'];
	$tgl           = explode('-',$tanggal);
	$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat        = $_POST['alamat'];
	$no_telepon    = $_POST['no_telepon'];
	$kelas         = $_POST['kelas'];
	$semester      = $_POST['semester'];
	$nilai_ipk     = $_POST['nilai_ipk'];
	$dos_akdmk     = $_POST['dos_akdmk'];
	$sks_total     = $_POST['sks_total'];
	$sks_now       = $_POST['sks_now'];
	$sts_smt       = $_POST['sts_smt'];
	$sts_now       = $_POST['sts_now'];

	// perintah query untuk menyimpan data ke tabel mahasiswa
	$query = $session->execute("INSERT INTO mahasiswa(nim,
	nama,
   	tempat_lahir,
   	tanggal_lahir,
   	jenis_kelamin,
   	alamat,
   	no_telepon,
   	kelas,
    semester,
    nilai_ipk,
    dos_akdmk,
    sks_total,
    sks_now,
    sts_smt,
    sts_now)	
   VALUES('$nim',
   '$nama',
   '$tempat_lahir',
   '$tanggal_lahir',
   '$jenis_kelamin',
   '$alamat',
   '$no_telepon',
   '$kelas',
   '$semester',
   $nilai_ipk,
   '$dos_akdmk',
   $sks_total,
   $sks_now,
   '$sts_smt',
   '$sts_now')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: mahasiswa.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: mahasiswa.php?alert=1');
	}						
}
?>
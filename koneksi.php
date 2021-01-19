<?php
$cluster   = Cassandra::cluster()
               ->withContactPoints('127.0.0.1')
               ->build();
$session   = $cluster->connect("uassbd"); //membuat session, koneksi ke keyspace yang akan digunakan
//if($session){contoh sintaks untuk mengecek apakah Cassandra berhasil terkoneksi ke localhost atau tidaknya
	//echo "Koneksi Sukses"; 
//}else{
	//echo "Koneksi Gagal";
//}
?>
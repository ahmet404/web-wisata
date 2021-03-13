<?php
date_default_timezone_set('Asia/Jakarta');
$kdb = new mysqli("localhost","fsociety","an0n7","db_wisata");
if($kdb->connect_error){
	die("Koneksi Gagal : ". $kdb->connect_error);
}
?>

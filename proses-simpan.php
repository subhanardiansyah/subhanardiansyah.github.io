<?php
// memanggil file penduduk.php
require_once 'penduduk.php';
$tanggal = date("Y-m-d H:i:s");
if (isset($_POST['simpan'])) {
	// membuat objek penduduk
	$penduduk = new penduduk();

	// ambil data hasil submit dari form
	$no_kk        		= $_POST['no_kk'];
	$nik          		= $_POST['nik'];
	$nama_lengkap  		= trim($_POST['nama_lengkap']);
	$id_stat_hbkel 		= $_POST['id_stat_hbkel'];
	$no_rt         		= $_POST['no_rt'];
	$tanggal_create    	= $tanggal;
	$tanggal_update    	= $tanggal;

	// insert data penduduk
	$penduduk->insert($no_kk, $nik, $nama_lengkap, $id_stat_hbkel, $no_rt, $tanggal_create, $tanggal_update);
}

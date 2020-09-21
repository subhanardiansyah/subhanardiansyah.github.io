<?php
// memanggil file penduduk.php
require_once 'penduduk.php';
$tanggal = date("Y-m-d H:i:s");
if (isset($_POST['simpan'])) {
	if (isset($_POST['no_kk'])) {

		// membuat objek penduduk
		$penduduk = new penduduk();

		// ambil data hasil submit dari form
		$no_kk        		= $_POST['no_kk'];
		$nik          		= $_POST['nik'];
		$nama_lengkap  		= trim($_POST['nama_lengkap']);
		$id_stat_hbkel 		= $_POST['id_stat_hbkel'];
		$no_rt         		= $_POST['no_rt'];
		$tanggal_create    	= $_POST['tanggal_create'];
		$tanggal_update    	= $tanggal;

		// update data penduduk
		$penduduk->update($nik, $nama_lengkap, $id_stat_hbkel, $no_rt, $tanggal_create, $tanggal_update, $no_kk);
	}
}

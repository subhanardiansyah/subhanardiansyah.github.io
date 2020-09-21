<?php
// memanggil file penduduk.php
require_once 'penduduk.php';

if (isset($_GET['id'])) {
    // membuat objek penduduk
    $penduduk = new penduduk();

    $no_kk = $_GET['id'];

    // delete data penduduk
    $penduduk->delete($no_kk);
}

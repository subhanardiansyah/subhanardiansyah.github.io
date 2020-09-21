 <?php

    /* class penduduk */
    class penduduk
    {

        /* method untuk menampilkan data penduduk */
        function view()
        {
            // memanggil file database.php
            require_once "config/database.php";

            // membuat objek db dengan nik
            $db = new database();

            // membuka koneksi ke database
            $mysqli = $db->connect();

            // sql statement untuk mengambil semua data penduduk
            $sql = "SELECT * FROM data_penduduk ORDER BY no_kk DESC";

            $result = $mysqli->query($sql);

            while ($data = $result->fetch_assoc()) {
                $hasil[] = $data;
            }

            // menutup koneksi database
            $mysqli->close();

            // nilai kembalian dalam bentuk array
            return $hasil;
        }

        /* Method untuk menyimpan data ke tabel penduduk */
        function insert($no_kk, $nik, $nama_lengkap, $id_stat_hbkel, $no_rt, $tanggal_create, $tanggal_update)
        {
            // memanggil file database.php
            require_once "config/database.php";

            // membuat objek db dengan nik  b
            $db = new database();

            // membuka koneksi ke database
            $mysqli = $db->connect();

            $no_kk          = $mysqli->real_escape_string($no_kk);
            $nik            = $mysqli->real_escape_string($nik);
            $nama_lengkap   = $mysqli->real_escape_string($nama_lengkap);
            $id_stat_hbkel  = $mysqli->real_escape_string($id_stat_hbkel);
            $no_rt          = $mysqli->real_escape_string($no_rt);
            $tanggal_create = $mysqli->real_escape_string($tanggal_create);
            $tanggal_update = $mysqli->real_escape_string($tanggal_update);

            // sql statement untuk insert data penduduk
            $sql = "INSERT INTO data_penduduk (no_kk, nik, nama_lengkap, id_stat_hbkel, no_rt, tanggal_create, tanggal_update) 
                VALUES ('$no_kk', '$nik', '$nama_lengkap', '$id_stat_hbkel', '$no_rt', '$tanggal_create', '$tanggal_update')";

            $result = $mysqli->query($sql);

            // cek hasil query
            if ($result) {
                /* jika data berhasil disimpan alihkan ke halaman penduduk dan tampilkan pesan = 2 */
                header("Location: index.php?alert=2");
            } else {
                /* jika data gagal disimpan alihkan ke halaman penduduk dan tampilkan pesan = 1 */
                header("Location: index.php?alert=1");
            }

            // menutup koneksi database
            $mysqli->close();
        }

        /* Method untuk menampilkan data penduduk berdasarkan no_kk */
        function get_penduduk($no_kk)
        {
            // memanggil file database.php
            require_once "config/database.php";

            // membuat objek db dengan nik 
            $db = new database();

            // membuka koneksi ke database
            $mysqli = $db->connect();

            // sql statement untuk mengambil data penduduk berdasarkan no_kk
            $sql = "SELECT * FROM data_penduduk WHERE no_kk='$no_kk'";

            $result = $mysqli->query($sql);
            $data   = $result->fetch_assoc();

            // menutup koneksi database
            $mysqli->close();

            // nilai kembalian dalam bentuk array
            return $data;
        }

        /* Method untuk mengubah data pada tabel penduduk */
        function update($nik, $nama_lengkap, $id_stat_hbkel, $no_rt, $tanggal_create, $tanggal_update, $no_kk)
        {
            // memanggil file database.php
            require_once "config/database.php";

            // membuat objek db dengan nik  b
            $db = new database();

            // membuka koneksi ke database
            $mysqli = $db->connect();

            $nama_lengkap   = $mysqli->real_escape_string($nama_lengkap);

            // sql statement untuk update data penduduk
            $sql = "UPDATE data_penduduk SET nik            = '$nik', 
                                             nama_lengkap   = '$nama_lengkap',
                                             id_stat_hbkel  = '$id_stat_hbkel',
                                             no_rt          = '$no_rt',
                                             tanggal_create	= '$tanggal_create',
		                                     tanggal_update	= '$tanggal_update'
                                       WHERE no_kk          = '$no_kk'";

            $result = $mysqli->query($sql);

            // cek hasil query
            if ($result) {
                /* jika data berhasil disimpan alihkan ke halaman penduduk dan tampilkan pesan = 3 */
                header("Location: index.php?alert=3");
            } else {
                /* jika data gagal disimpan alihkan ke halaman penduduk dan tampilkan pesan = 1 */
                header("Location: index.php?alert=1");
            }

            // menutup koneksi database
            $mysqli->close();
        }

        /* Method untuk menghapus data pada tabel penduduk */
        function delete($no_kk)
        {
            // memanggil file database.php
            require_once "config/database.php";

            // membuat objek db dengan nik  b
            $db = new database();

            // membuka koneksi ke database
            $mysqli = $db->connect();

            // sql statement untuk delete data penduduk
            $sql = "DELETE FROM data_penduduk WHERE no_kk = '$no_kk'";

            $result = $mysqli->query($sql);

            // cek hasil query
            if ($result) {
                /* jika data berhasil disimpan alihkan ke halaman penduduk dan tampilkan pesan = 4 */
                header("Location: index.php?alert=4");
            } else {
                /* jika data gagal disimpan alihkan ke halaman penduduk dan tampilkan pesan = 1 */
                header("Location: index.php?alert=1");
            }

            // menutup koneksi database
            $mysqli->close();
        }
    }
    ?>
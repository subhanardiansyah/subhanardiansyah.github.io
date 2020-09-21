  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-user"></i> Data Penduduk

          <a class="btn btn-success pull-right" href="?page=tambah">
            <i class="glyphicon glyphicon-plus"></i> Tambah
          </a>
        </h4>
      </div>

      <?php
      if (empty($_GET['alert'])) {
        echo "";
      } elseif ($_GET['alert'] == 1) {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
      } elseif ($_GET['alert'] == 2) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data penduduk berhasil disimpan.
          </div>";
      } elseif ($_GET['alert'] == 3) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data penduduk berhasil diubah.
          </div>";
      } elseif ($_GET['alert'] == 4) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data penduduk berhasil dihapus.
          </div>";
      }
      ?>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Data Penduduk</h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>No.</th>
                <th>No. KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Status Hubungan Keluarga</th>
                <th>No. RT</th>
                <th>Tanggal Create</th>
                <th>Tanggal Update</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              // memanggil file penduduk.php
              require_once 'penduduk.php';

              // membuat objek penduduk
              $penduduk = new penduduk();

              // mengambil seluruh data penduduk
              $result = $penduduk->view();

              $no = 1;
              $color;

              if (!empty($result)) {
                foreach ($result as $data) {

                  $status = $data['id_stat_hbkel'];
                  if ($status == 1) {
                    $color = "style='background-color: grey;'";
                  } else {
                    $color = "style='background-color: white;'";
                  }
                  echo " <tr>
                    <td width='50' $color class='center'>$no</td>
                    <td width='150' $color>$data[no_kk]</td>
                    <td width='150' $color>$data[nik]</td>
                    <td width='180' $color>$data[nama_lengkap]</td>
                    <td width='50' $color>$data[id_stat_hbkel]</td>
                    <td width='50' $color>$data[no_rt]</td>
                    <td width='100' $color>$data[tanggal_create]</td>
                    <td width='100' $color>$data[tanggal_update]</td>

                    <td width='100'>
                      <div class=''>
                        <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=ubah&id=$data[no_kk]'>
                          <i class='glyphicon glyphicon-edit'></i>
                        </a>";
              ?>
                  <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="proses-hapus.php?id=<?php echo $data['no_kk']; ?>" onclick="return confirm('Anda yakin ingin menghapus penduduk <?php echo $data['nama_lengkap']; ?>?');">
                    <i class="glyphicon glyphicon-trash"></i>
                  </a>
              <?php
                  echo "
                        </div>
                      </td>
                    </tr>";
                  $no++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
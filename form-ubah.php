  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Ubah data penduduk
        </h4>
      </div> <!-- /.page-header -->
      <?php
      $no_kk = $_GET['id'];

      if (isset($no_kk)) {
        // memanggil file penduduk.php
        require_once 'penduduk.php';

        // membuat objek penduduk
        $penduduk = new penduduk();

        // mengambil data penduduk
        $data = $penduduk->get_penduduk($no_kk);

        $no_kk          = $data['no_kk'];
        $nik            = $data['nik'];
        $nama_lengkap   = $data['nama_lengkap'];
        $id_stat_hbkel  = $data['id_stat_hbkel'];
        $no_rt          = $data['no_rt'];
        $tanggal_create = $data['tanggal_create'];
        // $tanggal_update = $data['tanggal_update'];
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">No KK</label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="no_kk" value="<?php echo $no_kk; ?>" readonly>
              </div>
            </div>

            <input type="hidden" class="form-control" name="tanggal_create" value="<?php echo $tanggal_create; ?>" readonly>

            <div class="form-group">
              <label class="col-sm-2 control-label">NIK</label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="nik" autocomplete="off" maxlength="16" value="<?php echo $nik; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_lengkap" autocomplete="off" value="<?php echo $nama_lengkap; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Status Hubungan Keluarga</label>
              <div class="col-sm-3">
                <select class="form-control" name="id_stat_hbkel" placeholder="Pilih Status" required>
                  <option value="<?php echo $id_stat_hbkel; ?>"><?php echo $id_stat_hbkel; ?></option>
                  <option value=""></option>
                  <option value="1">Kepala Keluarga</option>
                  <option value="2">Suami</option>
                  <option value="3">Istri</option>
                  <option value="4">Anak</option>
                  <option value="5">Menantu</option>
                  <option value="6">Cucu</option>
                  <option value="7">Orang Tua</option>
                  <option value="8">Mertua</option>
                  <option value="9">Famili Lain</option>
                  <option value="10">Pembantu</option>
                  <option value="11">Lainnya</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Rt</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="no_rt" autocomplete="off" maxlength="2" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $no_rt; ?>" required>
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
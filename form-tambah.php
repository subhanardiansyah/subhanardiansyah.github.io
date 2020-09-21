  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Input data penduduk
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">No. KK</label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="no_kk" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">NIK</label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="nik" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_lengkap" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Status Hubungan Keluarga</label>
              <div class="col-sm-3">
                <select class="form-control" name="id_stat_hbkel" placeholder="Pilih Status" required>
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
              <label class="col-sm-2 control-label">No. RT</label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="no_rt" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
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
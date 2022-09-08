<?php 
$sql = mysqli_query($koneksi, "select * from tb_pengawas where no = '".$_GET['no']."'");
$show = mysqli_fetch_array($sql);
?>
<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-12 col-md-12">
    <!-- general form elements -->
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">EDIT DATA Absensi Pengawas</h3>
      </div>
      <!-- /.card-header -->
      <form role="form" action="proses/update_absen.php" method="POST">
      <div class="row">
        <div class="col-md-6">
          <!-- form start -->
        <div class="card-body">
          <div class="form-group">
            <label for="no">No urut:</label>
            <input type="text" class="form-control" id="no" name="no" value="<?= $show['no']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="hari_ini">Pada hari ini :</label>
            <select class="custom-select" id="hari_ini" name="hari_ini">
              <?php 
              $nhari = mysqli_query($koneksi, "select * from tb_hari");
              while ($datah = mysqli_fetch_array($nhari)) {
                if ($datah['hari'] == $show['hari_ini']) {
                    $select = 'selected';
                  }else{
                    $select = '';
                  } ?>
                  <option value="<?= $datah['hari']; ?>" <?= $select; ?>><?= $datah['hari']; ?></option> 
                <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tgl">Tanggal :</label>
            <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $show['tgl']; ?>" required>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="mulai">Waktu Mulai :</label>
                <input type="time" class="form-control" id="mulai" name="mulai" value="<?= $show['mulai']; ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="berakhir">Waktu Berakhir :</label>
                <input type="time" class="form-control" id="berakhir" name="berakhir" value="<?= $show['berakhir']; ?>"  required>
              </div>    
            </div>
          </div>
          <div class="form-group">
            <label for="sekolah">Pada Sekolah/Madrasah :</label>
            <input type="text" class="form-control" id="sekolah" name="sekolah" value="<?= $show['sekolah']; ?>" readonly>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="ruang_lab">Ruang/Lab :</label>
                <input type="text" class="form-control" id="ruang_lab" name="ruang_lab" value="<?= $show['ruang_lab']; ?>" required>
              </div>    
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="sesi">Sesi :</label>
                <input type="text" class="form-control" id="sesi" name="sesi" value="<?= $show['sesi']; ?>" required>
              </div>    
            </div>
          </div>
          <div class="form-group">
            <label for="mapel">Mata Pelajaran :</label>
            <input type="text" class="form-control" id="mapel" name="mapel" value="<?= $show['mapel']; ?>" required>
          </div>
          <div class="form-group">
            <label for="jml_peserta">Jumlah Peserta Seharusnya :</label>
            <input type="text" class="form-control" id="jml_peserta" name="jml_peserta" value="<?= $show['jml_peserta']; ?>" required>
          </div>
          <div class="form-group">
            <label for="jml_hadir">Jumalh Peserta yang Hadir :</label>
            <input type="text" class="form-control" id="jml_hadir" name="jml_hadir" value="<?= $show['jml_hadir']; ?>" required>
          </div>
          <div class="form-group">
            <label for="jml_tdkhadir">Jumlah Peserta yang tidak Hadir :</label>
            <input type="text" class="form-control" id="jml_tdkhadir" name="jml_tdkhadir" value="<?= $show['jml_tdkhadir']; ?>" required>
          </div>
          <div class="form-group">
            <label for="catatan">Catatan Selama Pelaksanaan Ujian Sekolah :</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="3" value="<?= $show['catatan']; ?>" required> <?= $show['catatan']; ?></textarea>
          </div>
        </div>
        <!-- /.card-body -->
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5>BERITA ACARA INI DIBUAT DENGAN SESUNGGUHNYA</h5>
            <p>Yang membuat berita acara</p>
            <div class="row">
              <div class="card col-md-12 bg-light">
                <div class="form-group">
                  <label for="nama_pengawas">Nama Pengawas :</label>
                  <input type="text" class="form-control" id="nama_pengawas" name="nama_pengawas" value="<?= $show['nama_pengawas']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="nipy_pengawas">NIPY Pengawas :</label>
                  <input type="text" class="form-control" id="nipy_pengawas" name="nipy_pengawas" value="<?= $show['nipy_pengawas']; ?>" required>
                </div> 
                <div class="form-group">
                  <input type="text" name="file_edit" value="<?= $show['file']; ?>" hidden>
                  <label class="" for="sig">Tanda Tangan harus di isi sebelum simpan perubahan :</label>
                  <br/>
                     <!--Signature area -->
                <div id="signature" class="border bg-white"></div><br/>
                
                <textarea name="code" id="code" style="display: none" required></textarea>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary" onclick="return confirm('Pastikan data anda benar! Jika ya klik OK.')">Simpan Perubahan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->
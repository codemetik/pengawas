<!-- Info boxes -->

<div class="row">

  <div class="col-12 col-sm-12 col-md-12">

    <!-- general form elements -->

    <div class="card card-primary">

      <div class="card-header">

        <h3 class="card-title">Absensi Pengawas</h3>

      </div>

      <!-- /.card-header -->

      <form role="form" action="proses/input_absen.php" method="POST">

      <div class="row">

        <div class="col-md-6">

          <!-- form start -->

        <div class="card-body">

          <div class="form-group">

            <label for="hari_ini">Pada hari ini :</label>

            <select class="custom-select" id="hari_ini" name="hari_ini">

              <option value="Senin">Senin</option>

              <option value="Selasa">Selasa</option>

              <option value="Rabu">Rabu</option>

              <option value="Kamis">Kamis</option>

              <option value="Jumat">Jum'at</option>

            </select>

          </div>

          <div class="form-group">

            <label for="tgl">Tanggal :</label>

            <input type="date" class="form-control" id="tgl" name="tgl" required>

          </div>

          <div class="row">

            <div class="col-md-6">

              <div class="form-group">

                <label for="mulai">Waktu Mulai :</label>

                <input type="time" class="form-control" id="mulai" name="mulai" placeholder="Waktu Mulai" required>

              </div>

            </div>

            <div class="col-md-6">

              <div class="form-group">

                <label for="berakhir">Waktu Berakhir :</label>

                <input type="time" class="form-control" id="berakhir" name="berakhir" placeholder="Waktu berakhir" required>

              </div>    

            </div>

          </div>

          <div class="form-group">

            <label for="sekolah">Sekolah:</label>

            <input type="text" class="form-control" id="sekolah" name="sekolah" value="SMK Satya Praja 2 Petarukan" readonly>

          </div>

          <div class="row">

            <div class="col-md-6">

              <div class="form-group">

                <label for="ruang_lab">Ruang/Lab :</label>

                <input type="text" class="form-control" id="ruang_lab" name="ruang_lab" placeholder="Ruang/Lab">

              </div>    

            </div>

            <div class="col-md-6">

              <div class="form-group">

                <label for="sesi">Sesi ke  :</label>

                <input type="text" class="form-control" id="sesi" name="sesi" placeholder="1/2 ">

              </div>    

            </div>

          </div>

          <div class="form-group">

            <label for="mapel">Pelajaran :</label>

            <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukan nama mata pelajaran">

          </div>

          <div class="form-group">

            <label for="jml_peserta">Jumlah Peserta Seharusnya :</label>

            <input type="text" class="form-control" id="jml_peserta" name="jml_peserta" placeholder="Jumlah peserta seharusnya">

          </div>

          <div class="form-group">

            <label for="jml_hadir">Jumlah Peserta yang Hadir :</label>

            <input type="text" class="form-control" id="jml_hadir" name="jml_hadir" placeholder="Jumlah peserta yang hadir">

          </div>

          <div class="form-group">

            <label for="jml_tdkhadir">Jumlah Peserta yang tidak Hadir :</label>

            <input type="text" class="form-control" id="jml_tdkhadir" name="jml_tdkhadir" placeholder="Isi kan nol (0), jika semua hadir" autocomplete="off">

          </div>

          <div class="form-group">

            <label for="catatan">Catatan Selama Pelaksanaan Ujian:</label>

            <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="..."></textarea>

          </div>

        </div>

        <!-- /.card-body -->

        </div>

        <div class="col-md-6">

          <div class="card-body">

            <h5>BERITA ACARA INI DIBUAT DENGAN SESUNGGUHNYA</h5>

            <p>Yang membuat berita acara</p>

            <div class="row">

              <div class="card col-lg-12 bg-light">

                <div class="form-group">

                  <label for="nama_pengawas">Nama Pengawas 1:</label>

                  <input type="text" class="form-control" id="nama_pengawas" name="nama_pengawas" placeholder="Nama lengkap dan gelar" required>

                </div>

                <div class="form-group">

                  <label for="nipy_pengawas">NIPY Pengawas 1:</label>

                  <input type="text" class="form-control" id="nipy_pengawas" name="nipy_pengawas" placeholder="Nipy" required>

                </div> 

                <div class="form-group">

                  <label class="" for="">Tanda Tangan Pengawas:</label>

                  <br/>

                <!--  <div id="sig" ></div>-->

                <!--  <br/>-->

                <!--  <button id="clear" class="btn-light">Hapus Tanda Tangan</button>-->

                <!--  <textarea id="signature64" class="form-control" name="signed" style="display: none"></textarea>-->

                  

                   <!--Signature area -->

                <div id="signature" class="border bg-white"></div><br/>

                

                <textarea name="code" id="code" style="display: none" required></textarea>

        

                </div>

              </div>

              <div class="card-footer">

                <button type="submit" name="simpan" class="btn btn-primary" onclick="return confirm('Pastikan data anda benar! Jika ya klik OK.')">Submit</button>

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
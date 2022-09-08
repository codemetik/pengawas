<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Laporan Absensi</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead class="bg-primary">
      <tr>
        <th>No</th>
        <th>NIPY</th>
        <th>Nama Pengawas</th>
        <th>Hari dan Tgl</th>
        <th>Waktu</th>
        <th>Sekolah</th>
        <th>Ruang/lab</th>
        <th>Sesi</th>
        <th>Mapel</th>
        <th>JML Peserta</th>
        <th>JML Hadir</th>
        <th>JML TDK Hadir</th>
        <th>Catatan</th>
        <th>Detail</th>
      </tr>
      </thead>
      <tbody>
      <?php 
      $query = mysqli_query($koneksi, "select * from tb_pengawas");
      while ($sql = mysqli_fetch_array($query)) { 
        if ($sql['nipy_pengawas'] == $_SESSION['nipy']) {
        ?>
        <tr>
          <td><?= $sql['no']; ?></td>
          <td><?= $sql['nipy_pengawas']; ?></td>
          <td><?= $sql['nama_pengawas']; ?></td>
          <td><?= $sql['hari_ini'].", ".$sql['tgl']; ?></td>
          <td><?= $sql['mulai']." - ".$sql['berakhir']; ?></td>
          <td><?= $sql['sekolah']; ?></td>
          <td><?= $sql['ruang_lab']; ?></td>
          <td><?= $sql['sesi']; ?></td>
          <td><?= $sql['mapel']; ?></td>
          <td><?= $sql['jml_peserta']; ?></td>
          <td><?= $sql['jml_hadir']; ?></td>
          <td><?= $sql['jml_tdkhadir']; ?></td>
          <td><?= $sql['catatan']; ?></td>
          <td>
            <a href="?page=detail_absen&no=<?= $sql['no']; ?>">Detail</a> || <a href="fpdf184/print_pdf.php?pdf=<?= $sql['no']; ?>" target="_blank">Print PDF</a>
          </td>
        </tr>
      <?php }
      }
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>No</th>
        <th>NIPY</th>
        <th>Nama Pengawas</th>
        <th>Hari dan Tgl</th>
        <th>Waktu</th>
        <th>Sekolah</th>
        <th>Ruang/lab</th>
        <th>Sesi</th>
        <th>Mapel</th>
        <th>JML Peserta</th>
        <th>JML Hadir</th>
        <th>JML TDK Hadir</th>
        <th>Catatan</th>
        <th>Detail</th>
      </tr>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
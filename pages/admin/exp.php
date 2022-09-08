<?php 
require_once('../../koneksi.php');

if (isset($_POST['submit'])) {
    $tgl = $_POST['tgl'];
	$qu = mysqli_query($koneksi, "select * from tb_pengawas where tgl = '".$tgl."'");
	$da = mysqli_fetch_array($qu);
// 	echo $data['hari_ini'].', '.date('d F Y',strtotime($data['tgl']));
}

// header("Content-type: application/file");
 // header("Content-type: application/vnd-ms-excel");
	header("Content-type: application/force-download");
	header("Content-Disposition: attachment; filename=Rekap ".$da['hari_ini']." absensi pengawas ".date('d F Y',strtotime($da['tgl'])).".xls");
	header("Content-Transfer-Encoding: BINARY");
?>
<!DOCTYPE html>
<html leng="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Rekap Absensi Pengawas</title>
	  <!-- Theme style -->
  <!--<link rel="stylesheet" href="../../dist/css/adminlte.min.css">-->
	    <!-- DataTables -->
  <!--<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">-->
  <!--<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">-->
  <!-- Google Font: Source Sans Pro -->
  <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
</head>
<body>
<div class="card">
	<div class="card-header">
		<table>
			<h3>BERITA ACARA</h3>
			<h6>PENYELENGGARAAN</h6>
			<h6>UJIAN SEKOLAH BERBASIS KOMPUTER (USBK)</h6>
			<h6>TAHUN PELAJARAN 2021/2022</h6>
			<h6><?php
				if (isset($_POST['submit'])) {
				    $tgl = $_POST['tgl'];
					$quwer = mysqli_query($koneksi, "select * from tb_pengawas where tgl = '".$tgl."'");
					$data = mysqli_fetch_array($quwer);
					echo $data['hari_ini'].', '.date('d F Y',strtotime($data['tgl']));
				} ?>
			</h6>
	</div>
</div>
<div class="card-body">
	<table id="example1" class="table table-bordered table-striped" border="1">
      <thead class="bg-primary">
      <tr style="height: 110px; width: 100px">
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
        <th style="width: 100px;">Paraf</th>
      </tr>
      </thead>
      <tbody>
      <?php 
      if (isset($_POST['submit'])) {
      	$query = mysqli_query($koneksi, "select * from tb_pengawas where tgl = '".$_POST['tgl']."'");
      }else if(!isset($_GET['tgl'])){
      	$query = mysqli_query($koneksi, "select * from tb_pengawas");
      }
        $no=1;
      while ($sql = mysqli_fetch_array($query)) { 
        ?>
        <tr style="height: 110px; width: 100px">
            <td><?= $no++; ?></td>
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
          <td style="width: 100px;">
          	<img src="https://smksatyapraja2.id/pengawas/proses/<?= $sql['file']; ?>" width="70" height="70">
          </td>
        </tr>
      <?php }
      ?>
      </tbody>
      <tfoot>
      <tr style="height: 110px; width: 100px">
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
        <th style="width: 100px;">Paraf</th>
      </tr>
      </tfoot>
    </table>
</div>

<!-- jQuery -->
<!--<script src="../../plugins/jquery/jquery.min.js"></script>-->
<!-- DataTables -->
<!--<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>-->
<!--<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>-->
<!--<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>-->
<!--<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>-->
</body>
</html>
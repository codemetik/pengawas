<?php
//menyertakan file fpdf, file fpdf.php di dalam folder FPDF yang diekstrak
include "../koneksi.php";
include "fpdf.php";

if (isset($_GET['pdf'])) {

	$query = mysqli_query($koneksi, "select * from tb_pengawas where no = '".$_GET['pdf']."'");
	$sql = mysqli_fetch_array($query);
//membuat objek baru bernama pdf
$pdf = new FPDF();
//membuat halaman baru
$pdf->AddPage();
//menyeting jenis font, bold, dan ukuran
$pdf->SetFont('Arial','B',20);
$pdf->Cell(190,10,'BERITA ACARA',0,0,'C');
$pdf->Ln(6);
$pdf->SetFont('Arial','',12);
$pdf->Cell(190,10,'PENYELENGGARAAN',0,0,'C');
$pdf->Ln(6);
$pdf->Cell(190,10,'UJIAN SEKOLAH BERBASIS KOMPUTER (USBK)',0,0,'C');
$pdf->Ln(6);
$pdf->Cell(190,10,'TAHUN PELAJARAN 2021/2022',0,0,'C');

$pdf->Ln(10);
$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Hari dan tanggal',0,0,'L');
$pdf->Cell(-150,10,'');
$pdf->Cell(190,10,' : '.$sql['hari_ini'].', '.date('d F Y',strtotime($sql['tgl'])));
$pdf->Ln(10);

$pdf->Cell(190,10,'A.  Telah dilaksanakan Ujian Sekolah Berbasis Komputer dari pukul '.$sql['mulai'],0,0,'L');
$pdf->Ln(6);
$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Sampai dengan pukul '.$sql['berakhir'],0,0,'L');
$pdf->Cell(-150,10,'');
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Pada Sekolah/Madrasah',0,0,'L');
$pdf->Cell(-120,10,'');
$pdf->Cell(190,10,' : '.$sql['sekolah']);
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Ruang / Lab',0,0,'L');
$pdf->Cell(-120,10,'');
$pdf->Cell(190,10,' : '.$sql['ruang_lab']);
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Sesi',0,0,'L');
$pdf->Cell(-120,10,'');
$pdf->Cell(190,10,' : '.$sql['sesi']);
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Mata Pelajaran',0,0,'L');
$pdf->Cell(-120,10,'');
$pdf->Cell(190,10,' : '.$sql['mapel']);
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Jumlah Peserta seharusnya',0,0,'L');
$pdf->Cell(-120,10,'');
$pdf->Cell(190,10,' : '.$sql['jml_peserta'].' Orang');
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Jumlah Peserta yang hadir',0,0,'L');
$pdf->Cell(-120,10,'');
$pdf->Cell(190,10,' : '.$sql['jml_hadir'].' Orang');
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Jumlah Peserta yang tidak hadir',0,0,'L');
$pdf->Cell(-120,10,'');
$pdf->Cell(190,10,' : '.$sql['jml_tdkhadir'].' Orang');
$pdf->Ln(8);

$pdf->Cell(190,10,'B.  Catatan selama pelaksanaan Ujian Sekolah ',0,0,'L');
$pdf->Cell(10,8,'',0,1);
$pdf->Cell(6,8,'');
$pdf->Cell(190,10,' : '.$sql['catatan'],0,0,'L');
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->Cell(190,10,'Berita ini dibuat dengan sesungguhnya',0,0,'C');
$pdf->Ln(6);

$pdf->SetFont('Arial','',14);
$pdf->Cell(190,10,'Yang membuat Berita Acara',0,0,'C');
$pdf->Ln(15);

$pdf->SetFont('Arial','',12);
$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Pengawas',0,0,'L');
$pdf->Ln(8);

//Image( file name , x position , y position , width [optional] , height [optional] )
$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Tanda Tangan',0,0,'L');
$pdf->Cell(-150,10,'');
$pdf->Cell(190,10,' : ');
$pdf->Image('../proses/'.$sql['file'],67,160,50,30);
$pdf->Ln(20);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'Nama Pengawas',0,0,'L');
$pdf->Cell(-150,10,'');
$pdf->Cell(190,10,' : '.$sql['nama_pengawas']);
$pdf->Ln(8);

$pdf->Cell(6,10,'');
$pdf->Cell(190,10,'NIPY',0,0,'L');
$pdf->Cell(-150,10,'');
$pdf->Cell(190,10,' : '.$sql['nipy_pengawas']);
$pdf->Ln(8);

//menampilkan tulisan
$pdf->Output();

}//tutup fungsi if

?>
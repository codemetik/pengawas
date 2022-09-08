<?php 
require_once("../koneksi.php");

if (isset($_POST['simpan'])) {
	
	$hari_ini = $_POST['hari_ini'];
	$tgl = $_POST['tgl'];
	$mulai = $_POST['mulai'];
	$berakhir = $_POST['berakhir'];
	$sekolah = $_POST['sekolah'];
	$ruang_lab = $_POST['ruang_lab'];
	$sesi = $_POST['sesi'];
	$mapel = $_POST['mapel'];
	$jml_peserta = $_POST['jml_peserta'];
	$jml_hadir = $_POST['jml_hadir'];
	$jml_tdkhadir = $_POST['jml_tdkhadir'];
	$catatan = $_POST['catatan'];
	$nama_pengawas = $_POST['nama_pengawas'];
	$nipy_pengawas = $_POST['nipy_pengawas'];
	
	$folderPath = "upload/";
	$image_parts = explode(";base64,", $_POST['code']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . uniqid() . '.'.$image_type;
    // $name_file = uniqid() . '.'.$image_type;
    file_put_contents($file, $image_base64);
    //20
    $query = mysqli_query($koneksi, "insert into tb_pengawas(hari_ini, tgl, mulai, berakhir, sekolah, ruang_lab, sesi, mapel, jml_peserta, jml_hadir, jml_tdkhadir, catatan, nama_pengawas, nipy_pengawas, file) values('".$hari_ini."','".$tgl."','".$mulai."','".$berakhir."','".$sekolah."','".$ruang_lab."','".$sesi."','".$mapel."','".$jml_peserta."','".$jml_hadir."','".$jml_tdkhadir."','".$catatan."','".$nama_pengawas."','".$nipy_pengawas."','".$file."')");

    if ($query) {
    	echo "<script>
    	alert('Data berhasil di input ke database');
    	document.location.href='../dashboard.php';
    	</script>";
    }else{
    	echo "<script>
    	alert('Data gagal di input ke database');
    	document.location.href='../dashboard.php';
    	</script>";
    }
}
?>
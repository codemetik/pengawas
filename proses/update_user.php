<?php 
require_once('../koneksi.php');

if (isset($_POST['simpan'])) {
	$no = $_POST['no'];
	$nipy = $_POST['nipy'];
	$full_name = $_POST['full_name'];

	$sql = mysqli_query($koneksi, "update tb_user set nipy = '".$nipy."', full_name = '".$full_name."' where no = '".$no."'");
	if ($sql) {
		echo "<script>
		alert('Data user berhasil di update');
		document.location.href = '../dashboard.php?page=data_user';
		</script>";
	}else{
		echo "<script>
		alert('Data user gagal di update');
		document.location.href = '../dashboard.php?page=data_user';
		</script>";
	}
}
?>
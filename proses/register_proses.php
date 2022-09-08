<?php 
require_once("../koneksi.php");

if (isset($_POST['register'])) {
	$nipy = $_POST['nipy'];
	$full_name = $_POST['full_name'];


	$sql = mysqli_query($koneksi, "insert into tb_user(no,nipy, full_name) values('','".$nipy."','".$full_name."')");
	if ($sql) {
		echo "<script>
    alert('Anda berhasil registrasi');
    document.location.href = '../index.php';
    </script>";	
	}else{
		echo "<script>
    alert('Anda gagal registrasi');
    document.location.href = '../register.php';
    </script>";
	}

}
?>
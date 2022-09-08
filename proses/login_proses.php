<?php 
session_start();
require_once("../koneksi.php");

if (isset($_POST['login'])) {
	$user = $_POST['no'];
	$pass = $_POST['nipy'];

	$query = mysqli_query($koneksi, "select * from tb_user where no = '".$user."' and nipy = '".$pass."'");
	$sql = mysqli_num_rows($query);
	$show = mysqli_fetch_array($query);

	if ($sql > 0) {
		$_SESSION['status'] = "login";
		$_SESSION['nipy'] = $show['nipy'];
		$_SESSION['nama'] = $show['full_name'];
		echo "<script>
	    alert('Selamat anda berhasil Login');
	    document.location.href = '../dashboard.php';
	    </script>";
	}else if($user == 'admin' && $pass == 'sapra2'){
	    $_SESSION['status'] = "login";
		$_SESSION['nama'] = 'Administrator';
		echo "<script>
	    alert('Anda login sebagai admin');
	    document.location.href = '../admin.php';
	    </script>";
	}else{
	    echo "<script>
	    alert('Maaf, Anda gagal Login');
	    document.location.href = '../index.php';
	    </script>";
	}
}
?>
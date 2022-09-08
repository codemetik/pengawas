<?php 
$hostname = 'localhost';
$username = 'smkg6671';
$password = 'smksapra2123';
$database = 'smkg6671_pengawas';


// $hostname = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'smkg6671_pengawas'; 


$koneksi = mysqli_connect($hostname, $username, $password, $database)
or die('Could not connect: ' . mysqli_connect_error());

date_default_timezone_set('Asia/Jakarta');
?>
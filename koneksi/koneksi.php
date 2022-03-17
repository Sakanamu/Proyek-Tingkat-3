<?php 
	define('HOST','localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'damtrack');

	$koneksi=mysqli_connect(HOST,USER,PASS,DB);
	// if($koneksi) {
	// 	echo "sabi nih";
	// }
	if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
 ?>
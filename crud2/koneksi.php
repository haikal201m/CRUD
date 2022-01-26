<?php 
$host ='localhost';
$username ='root';
$pass  ='sukses';
$db ='demo';
$con = mysqli_connect($host,$username,$pass);
if ($con) {
	$pilih = mysqli_select_db($con,$db);
	if (!$pilih) {
		die ("db tidak ada");
	}
}else{
	echo "tidak tekoneksi";
}

 ?>

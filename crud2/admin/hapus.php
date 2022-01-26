<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$id =$_GET['id'];
}else{
	echo "id no selected";
}

$hapus ="DELETE FROM user WHERE id='$id'"; 
$query =mysqli_query($con,$hapus);
if ($query) {
	header("location:index.php");
}
 ?>
<?php 
include "../koneksi.php";
include "../ceksession.php";
session_start();
unset($_SESSION);
session_destroy();
header("location:../index.php")
 ?>
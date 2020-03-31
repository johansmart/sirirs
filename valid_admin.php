<?php
include'koneksi.php';
session_start();
	if (empty($_SESSION['email'])){
	echo "<h1>Harap Login</H1>";	die("Belum Login <a href=\"javascript:history.back()\">Back</a>");
	}else{	
?>
<?php } ?>

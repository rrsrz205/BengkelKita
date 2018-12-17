<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "bengkel";

	$con = mysqli_connect($host,$user,$password,$dbname);
	if(mysqli_connect_errno()){
		echo "Koneksi Gagal : " . mysqli_connect_errno();
	}
	


 ?>
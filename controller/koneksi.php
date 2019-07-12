<?php 
	$server="locahost";
	$user="root";
	$password="";
	$nama_db="latihan_koneksi";

	$db=mysqli_connect($server, $user, $password,$nama_db);

	if (mysqli_connect_errno()){
		echo "koneksi database gagal :" .mysqli_connect_error();
	}else{
		echo "koneksi database berhasil.";
	}
 ?>
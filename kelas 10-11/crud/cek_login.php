<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi2.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database

	if($user['username']==$username){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		// alihkan ke halaman login
		header("location:login.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.html?pesan=gagal");
	}	
}else{
	header("location:index.html?pesan=gagal");
}

?>
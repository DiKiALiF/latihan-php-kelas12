<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:index_login.php?pesan=gagal");
}
$username = $_POST["username"];
	$password = $_POST["password"]; 
session_start();
//mengecek apakah user menginput captcha dengan benar
//jika captcha salah, maka akan menjalankan yang pertama
if ($_SESSION["code"] != $_POST["kodecaptcha"]) {
	echo "Username anda adalah <b>$username</b>"; echo "<br />";
	echo "Password anda adalah <b>$password</b>"; echo "<br />"; echo "<br/>";
	echo "Kode CAPTCHA anda salah";
} else { // jika captcha benar, maka perintah yang bawah akan dijalankan
	echo "Username anda <b>$username</b>"; echo "<br/>";
	echo "Password anda <b>$password</b>"; echo "<br/>"; echo "<br/>";
	echo "Kode CAPTCHA anda benar";
}
?>
<?php 
    // session merupakan data yang disimpan dalam suatu server, contoh penggunaannya adalah ketika user telah login 
    // di halaman tertentu
    
    session_start();
    include 'koneksi2.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $pass = $_POST['pass'];
 
    // menyeleksi data pada tabel login dengan username dan pass yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' and pass='$pass'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/beranda.php");
    }
    else{
        header("location:index.php?pesan=gagal");
    }
?>
<?php

include("koneksi.php");
// cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['simpan'])){

    // ambil data formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //membuat query update
    $sql ="UPDATE uts SET nama='$nama', 
    username='$username',password='$password' WHERE id=$id";
    $query = mysqli_query($db,$sql);
    
    //apakah query update berhasil??
    if($query) {
        //kalau berhasil alihkan ke halaman list-siswa.php
        header('location: list-user.php');
    } else{
        //kalau gagal tampilkan pesan
        die("Gagal Menyimpan Perubahan..");
    }
} else {
    die("Akses Dilarang..");
}
?>
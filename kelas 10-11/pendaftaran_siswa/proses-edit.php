<?php

include("koneksi.php");
// cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['simpan'])){

    // ambil data formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //membuat query update
    $sql ="UPDATE calon_siswa SET nama='$nama', 
    alamat='$alamat',jenis_kelamin='$jk', agama='$agama', 
    sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db,$sql);
    
    //apakah query update berhasil??
    if($query) {
        //kalau berhasil alihkan ke halaman list-siswa.php
        header('location: list-siswa.php');
    } else{
        //kalau gagal tampilkan pesan
        die("gagal menyimpan perubahan..");
    }
} else {
    die("akses dilarang..");
}
?>
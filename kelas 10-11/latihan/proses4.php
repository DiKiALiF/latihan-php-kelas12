<?php
if (isset($_POST['pilih'])) {
    $nis = $_POST['nis'];
    echo "NIS : 
    <b>$nis</b><br>";
}
if (isset($_POST['pilih'])) {
    $nama = $_POST['nama'];
    echo "Nama Lengkap : 
    <b>$nama</b><br>";
}
if (isset($_POST['pilih'])) {
    $jurusan = $_POST['jurusan'];
    echo "Jurusan: 
    <b>$jurusan</b><br>";
}
if (isset($_POST['pilih'])) {
    $home = $_POST['home'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    echo "Tempat dan Tanggal lahir : 
    <b>$home $tanggal $bulan $tahun</b><br>";
}
if (isset($_POST['pilih'])) {
    $jk = $_POST['jk'];
    echo "Jenis Kelamin : <b>$jk</b><br>";
}
if (isset($_POST['pilih'])) {
    $alamat = $_POST['alamat'];
    echo "Alamat : <b>$alamat</b><br>";
}
?>
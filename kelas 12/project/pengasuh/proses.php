<?php
include '../koneksi.php';
$pengasuh = new Pengasuh();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    if ($aksi == "create") {
        $pengasuh->create($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $telepon);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pengasuh->update($id, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $telepon);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pengasuh->delete($id);
        header("location:index.php");
    }

}
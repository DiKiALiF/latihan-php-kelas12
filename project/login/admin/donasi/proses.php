<?php
include '../koneksi.php';
$donasi = new Donasi();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $tanggal = $_POST['tanggal'];
    $nama_donatur = $_POST['nama_donatur'];
    $metode_donasi = $_POST['metode_donasi'];
    $total_donasi = $_POST['total_donasi'];
    $keterangan = $_POST['keterangan'];

    if ($aksi == "create") {
        $donasi->create($tanggal, $nama_donatur, $metode_donasi, $total_donasi, $keterangan);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $donasi->update($id, $tanggal, $nama_donatur, $metode_donasi, $total_donasi, $keterangan);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $donasi->delete($id);
        header("location:index.php");
    }

}
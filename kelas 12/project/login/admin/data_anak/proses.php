<?php
include '../koneksi.php';
$dataanak = new DataAnak();


if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $id_pengasuh = $_POST['id_pengasuh'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pendidikan = $_POST['pendidikan'];
    $nama_ortu_wali = $_POST['nama_ortu_wali'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create") {
        $dataanak->create($nama, $id_pengasuh, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $pendidikan, 
        $nama_ortu_wali, $alamat);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dataanak->update($id, $nama, $id_pengasuh,  $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $pendidikan, 
        $nama_ortu_wali, $alamat);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dataanak->delete($id);
        header("location:index.php");
    }

}
<?php

class Database{
    public $host = "localhost", $user = "root", $pass = "", $db = "dikialif";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi){
            // echo "berhasil";
        }
        else{
            echo "koneksi gagal";
        }
    }
}
// Data Tabel 
include 'login.php';
include 'donasi.php';
include 'pengasuh.php';
include 'data_anak.php';

//koneksi DB
$db = new Database();

?>
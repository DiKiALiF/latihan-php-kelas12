<?php

class Database{
    public $host = "localhost", $user = "root", $pass = "", $db = "pondok_yatim";
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
// Data Tabel Dosen & Mahasiswa
include 'login.php';
// include 'mahasiswa.php';

//koneksi DB
$db = new Database();

?>
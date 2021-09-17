<?php

class manusia{

    function __construct(){
        echo "ini adalah isi method construct </br>";
    }

    // method manusia
    function tampilkan_nama(){
        return "Nama saya Diki </br>";
    }
    function tampilkan_kelas(){
        return "Kelas XII-RPL 1 </br>";
    }
    function tampilkan_hobi(){
        return "Hobi saya bermain bola </br>";
    }
}

$manusia = new manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> tampilkan_kelas();
echo $manusia -> tampilkan_hobi();

?>
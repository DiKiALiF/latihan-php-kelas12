<?php 
    $koneksi = mysqli_connect("localhost","root","","dikialif");
 
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>
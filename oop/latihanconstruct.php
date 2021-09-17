<?php

class biodata{

function __construct($nama, $jk, $kelas){
    echo "Nama saya     : {$nama} </br>";
    echo "Jenis Kelamin : {$jk} </br>";
    echo "Kelas         : {$kelas} </br> <hr>";
}
}

$biodata = new biodata("Diki", "Laki-laki", "XII-RPL 1");
$biodata = new biodata("Yayan", "Laki-laki", "XII-RPL 2");
$biodata = new biodata("Aim", "Laki-laki", "XII-RPL 3");

?>
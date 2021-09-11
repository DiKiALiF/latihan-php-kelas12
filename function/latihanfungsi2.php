<?php

function luasLingkaran($r){
    $luas = 3.14 * $r * $r;
    return $luas;
}

function luasSegitiga($alas, $tinggi){
    $luas = 1/2 * $alas * $tinggi;
    return $luas;
}

function luasPersegipanjang($panjang, $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

echo "Luas lingkaran = ".luasLingkaran(5)."<br>";
echo "Luas segitiga = ".luasSegitiga(10,5)."<br>";
echo "Luas persegi panjang = ".luasPersegipanjang(10,5)."<br>";

?>
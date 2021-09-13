<?php

class perhitungan_bangun_ruang {

    function luasPersegi($sisi){
        echo "Sisinya = {$sisi} <br>";
        $luas = $sisi * $sisi;
        return $luas;
    }
    
    function luasSegitiga($alas, $tinggi){
        echo "Alasnya = {$alas} <br> Tingginya = {$tinggi} <br>";
        $luas = 1/2 * $alas * $tinggi;
        return $luas;
    }
    
    function luasLingkaran($r, $phi = 3.14){
        echo "Phi = {$phi} <br> Jari-jarinya = {$r} <br>";
        $luas = $phi * $r * $r;
        return $luas;
    }
    
}

$pbr = new perhitungan_bangun_ruang();

echo "Menghitung luas persegi <br>";
echo "Luasnya = " . $pbr->luasPersegi(10) . "<hr>";

echo "Menghitung luas segitiga <br>";
echo "Luasnya = " . $pbr->luasSegitiga(10,5) . "<hr>";

echo "Menghitung luas lingkaran <br>";
echo "Luasnya = " . $pbr->luasLingkaran(10) . "<hr>";

?>
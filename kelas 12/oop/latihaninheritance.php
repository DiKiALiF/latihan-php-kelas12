<?php

class bangun_datar {
    public $luas;
    public $keliling;
}

class persegi extends bangun_datar {
    function l_persegi($sisi) {
        echo "<h3> Menghitung luas dan keliling persegi </h3>";
        echo "Sisinya = {$sisi}";
        $this->luas = $sisi * $sisi;
        echo "<br> Luasnya = " . $this->luas;
        $this->keliling = 4 * $sisi;
        echo "<br> Kelilingnyanya = " . $this->keliling;
        echo "<hr>";
    }
}

class persegi_panjang extends bangun_datar {
    function l_persegi_panjang($panjang, $lebar) {
        echo "<h3> Menghitung luas dan keliling persegi panjang </h3>";
        echo "Panjangnya = {$panjang}";
        echo "<br> Lebarnya = {$lebar}";
        $this->luas = $panjang * $lebar;
        echo "<br> Luasnya = " . $this->luas;
        $this->keliling = 2 * ($panjang + $lebar);
        echo "<br> kelilingnya = " . $this->keliling;
        echo "<hr>";
    }
}

class segitiga extends bangun_datar {
    function l_segitiga($alas, $tinggi) {
        echo "<h3> Menghitung luas dan keliling segitiga </h3>";
        echo "Alasnya = {$alas}";
        echo "<br> Tingginya = {$tinggi}";
        $this->luas = 1/2 * $alas * $tinggi;
        echo "<br> Luasnya = " . $this->luas;
    }
    function k_segitiga($sisi1, $sisi2, $sisi3) {
        echo "<br> <br> Sisi 1 = {$sisi1}";
        echo "<br> Sisi 2 = {$sisi2}";
        echo "<br> Sisi 3 = {$sisi3}";
        $this->keliling = $sisi1 + $sisi2 + $sisi3;
        echo "<br> Kelilingya = " . $this->keliling;
        echo "<hr>";
    }
}

class lingkaran extends bangun_datar {
    function l_lingkaran($r, $phi = 3.14) {
        echo "<h3> Menghitung luas dan keliling lingkaran </h3>";
        echo "Jari-jarinya = {$r}";
        echo "<br> Phi = {$phi}";
        $this->luas = $phi * $r * $r;
        echo "<br> Luasnya = " . $this->luas;
        $this->keliling = 2 * $phi * $r;
        echo "<br> Kelilingnya = " . $this->keliling;
        echo "<hr>";    
    }
}

$pbd = new persegi;
$pbd -> l_persegi(10);
$pbd = new persegi_panjang;
$pbd -> l_persegi_panjang(10,5);
$pbd = new segitiga;
$pbd -> l_segitiga(10,5);
$pbd -> k_segitiga(5,10,15);
$pbd = new lingkaran;
$pbd -> l_lingkaran(10);

?>
<?php

// // class 
// class laptop {

//     // property/atribut
//     var $pemilik;
//     var $merk;
//     var $ukuran_laptop;

//     // method/function
//     function hidupkan_laptop() {
//         return "Hidupkan laptopnya";
//         }
      
//         function matikan_laptop() {
//         return "Matikan laptopnya";
//         }

// }

// // object
// $laptop_andi = new laptop();
// $laptop_anto = new laptop();

// echo $laptop_andi->hidupkan_laptop();
// echo "<br>";
// echo $laptop_andi->matikan_laptop();

// class 
class serigala {

    // property/atribut
    var $nama_ilmiah;
    var $tinggi;
    var $panjang;

    // method/function
        function kecepatan($kec) {
        return $kec;
        }

        function lama_hidup($lm_hdp) {
        return $lm_hdp;
        }

        function jenis_spesies($jns_sps) {
        return $jns_sps;
        }

}

// object
$srgl = new serigala();

echo "Serigala";
echo "<br><br>";
$srgl->nama_ilmiah = "Canis lupus";
echo "Nama ilmiah : " . $srgl->nama_ilmiah;
echo "<br>";
$srgl->tinggi = "80 - 85 cm (dewasa) ";
echo "Tinggi : " . $srgl->tinggi;
echo "<br>";
$srgl->panjang = "1 - 1,6 m (dewasa)";
echo "Panjang : " . $srgl->panjang;
echo "<br>";
echo "Kecepatan : " . $srgl->kecepatan("50 - 60 km/jam");
echo "<br>";
echo "Lama hidup : " . $srgl->lama_hidup("Jantan: 16 tahun (Di penangkaran), Betina: 14 tahun (Di alam bebas)");
echo "<br>";
echo "Jenis spesies : " . $srgl->jenis_spesies("Serigala Abu-abu, Serigala Arktik, Serigala Himalaya, Serigala Timur");

?>
<?php

// function perkenalan($a,$b){
//   echo "Perkenalkan, nama saya ".$a."<br/>";
//   echo "umur saya ".$b." tahun <br/>";
//   if ($b >= 17){
//     echo "Anda sudah memiliki KTP <br/>";
//   } elseif ($b < 17) {
//     echo "Anda belum memiliki KTP <br/>";
//   } else {
//     echo "Umur tidak valid <br/>";
//   }
// }
// perkenalan("Diki",17);

// function penjumlahan($angka1,$angka2){
//   $tambah = $angka1 + $angka2;
//   $kurang = $angka1 - $angka2;
//   $kali = $angka1 * $angka2;
//   $bagi = $angka1 / $angka2;
//   echo "Hasil penjumlahan = {$tambah} <br/>";
//   echo "Hasil pengurangan = {$kurang} <br/>";
//   echo "Hasil perkalian = {$kali} <br/>";
//   echo "Hasil pembagian = {$bagi} <br/>";
// }
// penjumlahan(10,5);

// Parameter Default
function Penjumlahan($usia, $nama="Diki"){
  echo "Nama : {$nama} <br>";
  echo "Usia : ".$usia."<br>";
} 
Penjumlahan(17);

?>
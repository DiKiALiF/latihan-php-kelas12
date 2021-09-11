<?php

// function parameter
// nilai yang bisa dimasukkan ke dalam fungsi
// atau sebuah nilai yang bisa di tentukan

function luasSegitiga($alas, $tinggi)
{
    $luas = ($alas * $tinggi) / 2;
    return $luas;
}
echo "Luas Segitiga : " . luasSegitiga(10, 8);
?>
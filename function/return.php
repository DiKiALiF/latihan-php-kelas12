<?php

function luasSegitiga($alas, $tinggi){
    $luas = 1/2 * $alas * $tinggi;
    return $luas;
}
echo "Luas segitiga = ".luasSegitiga(10,5);

?>
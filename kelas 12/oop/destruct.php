<?php

class manusia {

function __destruct(){
    echo "Ini adalah method destruct";
}

function nama(){
    echo "<br> Nama saya adalah ..... <br>";
}

function __construct(){
    echo "Ini adalah method construct";
}

}

$cetak = new manusia();

echo $cetak -> nama();

?>
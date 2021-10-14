<?php

//class manusia
class manusia{
    //property
    var $nama;
      
    //method construct di jalankan pertama kali
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    //method destruct di jalankan terakhir
    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }
    
    //method manusia
    function tampilkan_nama_kelompok(){
        return "Kelompok 7 <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama_kelompok();
?>
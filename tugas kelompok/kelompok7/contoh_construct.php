<?php
 
//class manusia
class manusia{
    //property
    var $nama;
    
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    //method manusia
    function tampilkan_nama_kelompok(){
        return "Kelompok 7 <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama_kelompok dari class manusia
echo $manusia->tampilkan_nama_kelompok();
?>
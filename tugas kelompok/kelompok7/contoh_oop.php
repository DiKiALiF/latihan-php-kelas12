<?php
//PHP OOP Part 2  Pengertian Class, Object, Property dan Method
//class kelompok
class kelompok{
    //property
    var $kelompok;
    var $nama;
    
    //method kelompok
    function tampilkan_kelompok(){
        return "Kelompok 7 <br/>";
    }
    
    function nama_kelompok(){
        return "Bagas Firmansyah <br/> Cecep Superi <br/> 
        Diki Alif Taufik <br/> Farid Ahmad Fadhilah <br/>";
    }
    
}
//instansiasi class kelompok
$kelompok = new kelompok();
 
//memanggil method tampilkan_kelompok dari class kelompok
echo $kelompok->tampilkan_kelompok();
 
//memanggil method nama_kelompok dari class kelompok
echo $kelompok->nama_kelompok();
?>
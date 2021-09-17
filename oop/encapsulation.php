<?php

// // class manusia
// class manusia {

//     //prop
//     public $nama = "Diki";

//     // method manusia
//     public function tampilkan_nama() {
//         echo "Nama saya ".$this->nama;
//     }

// }

// $manusia = new manusia();

// echo $manusia->tampilkan_nama();



// // private

// // class manusia
// class manusia {

//     //prop
//     private $nama = "Diki";

//     // method manusia
//     private function tampilkan_nama() {
//         echo "Nama saya ".$this->nama;
//     }
//     public function output() {
//         echo $this->tampilkan_nama();
//     }

// }

// $manusia = new manusia();

// echo $manusia->output();



// protected

// class manusia
class manusia {
// menentukan property dengan protected
// protected $nama = "malas ngoding";

protected function nama(){
    return "Nama saya Diki";
}
public function output(){
    return $this->nama();
}
// public function tampilkan_nama(){
//     return $this->nama;
// }
}
$manusia = new manusia();

echo $manusia->output();

?>
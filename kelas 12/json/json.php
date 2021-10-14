<?php

// $mahasiswa = [
//   'nama' => 'Nurul Huda',
//   'domisili' => 'Surabaya'
// ];

// echo json_encode($mahasiswa);

// $nilaiUjian = [70, 80, 50, 90];

// echo json_encode($nilaiUjian);

$listMahasiswaJSON = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
  ]';
  
// dikonversikan ke JSON
  $list = json_decode($listMahasiswaJSON);
 
// tampilkan data
  foreach ($list as $key => $mahasiswa) {
    echo "{$key}. Nama : {$mahasiswa->nama} <br>";
  }

?>
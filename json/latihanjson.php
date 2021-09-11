<?php
// File json yang akan dibaca
$file = "latihan.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca data array menggunakan foreach
foreach ($data as $d) {
    echo "Nama : " . $d['nama'] . "<br>";
    echo "Domisili : " . $d['domisili'] . "<br>";
    echo "Hobi : <br>";
foreach ($d['hobi'] as $e) {
    echo "<li>" . $e['hobi1'] . "</li>";
}
}
?>
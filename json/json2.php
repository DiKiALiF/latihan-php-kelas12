<?php
// File json yang akan dibaca
$file = "anggota.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca data array menggunakan foreach
foreach ($data as $d) {
    echo "No : " . $d['no'] . "<br>";
    echo "Nama : " . $d['nama'] . "<br>";
    echo "Jurusan : " . $d['jurusan'] . "<br>";
    echo "<br>";
}
?>
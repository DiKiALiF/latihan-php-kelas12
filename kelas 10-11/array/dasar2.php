<?php
// membuat array assosiatif
$artikel = [
"judul" => "Belajar Pemprograman PHP",
"penulis" => "Diki Alif Taufik",
"view" => "128"
];
// mencetak isi array assosiatif
echo "<h2>" . $artikel['judul']."</h2>";
echo "<p>oleh : " . $artikel['penulis']."</p>";
echo "<p>view : " . $artikel['view']."</p>";
?>
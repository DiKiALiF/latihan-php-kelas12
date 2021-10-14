<?php
// membuat array assosiatif

$nilai = [
    "judul" => "Cetak Nilai Siswa",
    "matematika" => 65,
    "fisika" => 90,
    "kimia" => 78
    ];

    // mencetak isi array assosiatif
echo "<h2>" . $nilai['judul']."</h2>";
echo "<p>Nilai Doni dalam mata pelajaran Fisika : " . $nilai['fisika']."</p>";
echo "<p>Nilai Doni dalam mata pelajaran Matematika : " . $nilai['matematika']."</p>";
echo "<p>Nilai Doni dalam mata pelajaran Kimia : " . $nilai['matematika']."</p>";
echo "<p>Nilai Didi dalam mata pelajaran Fisika : " . $nilai['fisika']."</p>";
echo "<p>Nilai Didi dalam mata pelajaran Matematika : " . $nilai['kimia']."</p>";
echo "<p>Nilai Didi dalam mata pelajaran Kimia : " . $nilai['kimia']."</p>";
echo "<p>Nilai Reza dalam mata pelajaran Fisika : " . $nilai['kimia']."</p>";
echo "<p>Nilai Reza dalam mata pelajaran Matematika : " . $nilai['fisika']."</p>";
echo "<p>Nilai Reza dalam mata pelajaran Kimia : " . $nilai['fisika']."</p>";

?>
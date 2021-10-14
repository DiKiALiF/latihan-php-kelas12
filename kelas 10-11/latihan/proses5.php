<?php
   if(isset($_POST['hitung'])){
    $jam = $_POST['jam'];
    $gol = $_POST['gol'];
    switch ($gol) {
        case 'A':
            $gaji_golongan=4000;
            $gaji = $jam * $gaji_golongan;
            echo "Jumlah Jam Kerja Anda = $jam jam <br>";
    echo "Golongan Kerja Anda = $gol <br>";
    echo "Gaji Anda Adalah = Rp. $gaji ";
        break;
        case 'B':
            $gaji_golongan=5000;
            $gaji = $jam * $gaji_golongan;
            echo "Jumlah Jam Kerja Anda = $jam jam <br>";
    echo "Golongan Kerja Anda = $gol <br>";
    echo "Gaji Anda Adalah = Rp. $gaji ";
        break;
        case 'C':
            $gaji_golongan=6000;
            $gaji = $jam * $gaji_golongan;
            echo "Jumlah Jam Kerja Anda = $jam jam <br>";
    echo "Golongan Kerja Anda = $gol <br>";
    echo "Gaji Anda Adalah = Rp. $gaji ";
        break;
        case 'D':
            $gaji_golongan=7000;
            $gaji = $jam * $gaji_golongan;
            echo "Jumlah Jam Kerja Anda = $jam jam <br>";
    echo "Golongan Kerja Anda = $gol <br>";
    echo "Gaji Anda Adalah = Rp. $gaji ";
        break;	
        default:	

    }
}
?>
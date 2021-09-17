<?php

class gaji {

public $total_gaji;
public $total_pengeluaran;

function total($jabatan, $pendidikan_terakhir){
echo "<h2> Pendapatan Gaji </h2>";

echo "Jabatan : {$jabatan}";
if ($jabatan == "Direktur"){
    $hjabatan = 10000000;
    echo "<br> Gaji Pokok : Rp. $hjabatan";
} elseif ($jabatan == "Manager"){
    $hjabatan = 5000000;
    echo "<br> Gaji Pokok : Rp. $hjabatan";    
} elseif ($jabatan == "Karyawan"){
    $hjabatan = 3000000;
    echo "<br> Gaji Pokok : Rp. $hjabatan";
} 

echo "<br> Pendidikan : {$pendidikan_terakhir}";
if ($pendidikan_terakhir == "SMP"){
    $hpendidikan_terakhir = 500000;
    echo "<br> Tunjangan : Rp. $hpendidikan_terakhir";
} elseif ($pendidikan_terakhir == "SMA"){
    $hpendidikan_terakhir = 1000000;
    echo "<br> Tunjangan : Rp. $hpendidikan_terakhir";
} elseif ($pendidikan_terakhir == "S1"){
    $hpendidikan_terakhir = 2000000;
    echo "<br> Tunjangan : Rp. $hpendidikan_terakhir";
}
$this->total_gaji = $hjabatan + $hpendidikan_terakhir;
echo "<br> Total Gaji : Rp. " . $this->total_gaji;

}

function pengeluaran($listrik, $kontrakan, $kendaraan){
echo "<hr> <h2> Pengeluaran </h2>";
echo "Bayar Listrik : Rp. {$listrik}";
echo "<br> Bayar Kontrakan : Rp. {$kontrakan}";
echo "<br> Cicilan Kendaraan : Rp. {$kendaraan}";
$this->total_pengeluaran = $listrik + $kontrakan + $kendaraan;
echo "<br> Total Pengeluaran : Rp. " . $this->total_pengeluaran;;

}

function sisa(){
echo "<hr> <b> Sisa : Rp. ";
$sisa = $this->total_gaji - $this->total_pengeluaran;
echo $this->sisa;
}
}

$output = new gaji();

echo $output -> total("Manager", "S1");
echo $output -> pengeluaran(200000, 1000000, 600000);
echo $output -> sisa();

?>
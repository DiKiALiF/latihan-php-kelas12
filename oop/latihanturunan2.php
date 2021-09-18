<?php

if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lamker = $_POST['lama_kerja'];
    $staker = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

class penggajihan {
    public $total_gaji;
    public $total_pengeluaran;
function pnggjhn($no, $nama, $unit, $tanggal) {
echo "<table>";
echo "<tr><td>No</td><td>:</td><td>{$no}</td></tr>";
echo "<tr><td>Nama</td><td>:</td><td>{$nama}</td></tr>";
echo "<tr><td>Unit</td><td>:</td><td>{$unit}</td></tr>";
echo "<tr><td>Tanggal Gaji</td><td>:</td><td>{$tanggal}</td></tr></table>";
}
}

class gaji extends penggajihan {
function gj($jabatan, $lamker, $staker) {
echo "<br><b><i>Gaji</i></b><br>";
echo "<table>";
echo "<tr><td>Jabatan</td><td>:</td><td>{$jabatan}</td></tr>";
if ($jabatan == "Kepala Sekolah"){
    $gajih = 5000000;
} elseif ($jabatan == "Guru"){
    $gajih = 3000000;
} elseif ($jabatan == "Karyawan"){
    $gajih = 1500000;
} else {
    $gajih = 0;
}
echo "<tr><td>Gaji</td><td>:</td><td>Rp. {$gajih}</td></tr>";
echo "<tr><td>Lama Kerja</td><td>:</td><td>{$lamker} Tahun</td></tr>";
if ($lamker <= 5){
    $bonus = 0;
} elseif ($lamker > 5){
    $bonus = 250000;
} elseif ($lamker > 10){
    $bonus = 500000;
} 
echo "<tr><td>Bonus Lama Kerja</td><td>:</td><td>Rp. {$bonus}</td></tr>";
echo "<tr><td>Status Kerja</td><td>:</td><td>{$staker}</td></tr>";
if ($staker == "Pegawai Tetap"){
    $tunjangan = 500000;
} elseif ($staker == "Pegawai Kontrak"){
    $tunjangan = 0;
}
echo "<tr><td>Tunjangan Status Kerja</td><td>:</td><td>Rp. {$tunjangan}</td></tr>";
$this->total_gaji = $gajih + $bonus + $tunjangan;
echo "<tr><td><b>Total Gaji</td><td>:</td><td>Rp. " . $this->total_gaji . "</b></table>";
}
}

class potongan extends penggajihan {
function ptngn($bpjs, $pinjaman, $tabungan, $lainnya) {
    echo "<br><b><i>Potongan</i></b><br>";
    echo "<table>";
    echo "<tr><td>BPJS</td><td>:</td><td>{$bpjs}</td></tr>";
    echo "<tr><td>Pinjaman</td><td>:</td><td>{$pinjaman}</td></tr>";
    echo "<tr><td>Tabungan</td><td>:</td><td>{$tabungan}</td></tr>";
    echo "<tr><td>Lainnya</td><td>:</td><td>{$lainnya}</td></tr>";
    $this->total_pengeluaran = $bpjs + $pinjaman + $tabungan + $lainnya;
    echo "<tr><td><b>Total Potongan</td><td>:</td><td>Rp. " . $this->total_pengeluaran . "</b></table><br>";
    $sisa = $this->total_gaji - $this->total_pengeluaran;
    echo "<b><i>Jumlah Yang Diterima : Rp. " . $this-> sisa . "</b></i>";
}
}


}

$a = new penggajihan;
$a -> pnggjhn($no, $nama, $unit, $tanggal);
$a = new gaji;
$a -> gj($jabatan, $lamker, $staker);
$a = new potongan;
$a -> ptngn($bpjs, $pinjaman, $tabungan, $lainnya);

?>
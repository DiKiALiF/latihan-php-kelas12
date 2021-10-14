<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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
echo "<table align=center>";
echo "<tr><td>No</td><td>:</td><td>{$no}</td></tr>";
echo "<tr><td>Nama</td><td>:</td><td>{$nama}</td></tr>";
echo "<tr><td>Unit</td><td>:</td><td>{$unit}</td></tr>";
echo "<tr><td>Tanggal Gaji</td><td>:</td><td>{$tanggal}</td></tr>";
}
}




class gaji extends penggajihan {
function gj($jabatan, $lamker, $staker) {
echo "<tr><td>&nbsp</td></tr>";
echo "<tr><td><td><td><b><i>Gaji</i></b></td></td></td><tr>";
echo "<tr><td>&nbsp</td></tr>";
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
    $tnjngn = 500000;
} elseif ($staker == "Pegawai Kontrak"){
    $tnjngn = 0;
}
echo "<tr><td>Tunjangan Status Kerja</td><td>:</td><td>Rp. {$tnjngn}</td></tr>";
$this->total_gaji = $gajih + $bonus + $tnjngn;
echo "<tr><td><b>Total Gaji</td><td>:</td><td><b>Rp. " . $this->total_gaji . "</b>";
}
}

class potongan extends gaji {
function ptngn($bpjs, $pinjaman, $tabungan, $lainnya) {
    echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td><td><td><b><i>Potongan</i></b></td></td></td><tr>";
    echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td>BPJS</td><td>:</td><td>Rp. {$bpjs}</td></tr>";
    echo "<tr><td>Pinjaman</td><td>:</td><td>Rp. {$pinjaman}</td></tr>";
    echo "<tr><td>Tabungan</td><td>:</td><td>Rp. {$tabungan}</td></tr>";
    echo "<tr><td>Lainnya</td><td>:</td><td>Rp. {$lainnya}</td></tr>";
    $this->total_pengeluaran = $bpjs + $pinjaman + $tabungan + $lainnya;
    echo "<tr><td><b>Total Potongan</td><td>:</td><td><b>Rp. " . $this->total_pengeluaran . "</b>";
    $sisa = $this->total_gaji - $this->total_pengeluaran;
    echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td><b><i>Jumlah Yang Diterima <td>:</td><td> <b> <i> Rp. " . $sisa . "</i></b></td></td></tr>";
}
}

}
$a = new potongan;
$a -> pnggjhn($no, $nama, $unit, $tanggal);
$a -> gj($jabatan, $lamker, $staker);
$a -> ptngn($bpjs, $pinjaman, $tabungan, $lainnya);

?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
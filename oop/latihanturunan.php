<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body background="bckgrnd.jpg">

<div class="container">
<div class="container">

  <center><img src="download.png" /><br><br>
<h2>PENGGAJIHAN<br>GURU/KARYAWAN YAYASAN ASSALAAM</h2></center><br/><br/>

<form method="POST" action="">

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">No</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="no">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="nama">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Unit</label>
    <div class="col-sm-8">
    <select class="form-control" id="exampleFormControlSelect1" name="unit">
<option>TK</option>
<option>SD</option>
<option>SMP</option>
<option>MTS</option>
<option>SMA</option>
<option>SMK</option>
</select>
    </div></div>
    <div class="form-group row">
    <tr><label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" id="inputEmail3" name="tanggal">
    </div></div>

<br><center><h3>Gaji</h3></center><br>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-8">
    <select class="form-control" id="exampleFormControlSelect1" name="jabatan">
<option>Kepala Sekolah</option>
<option>Guru</option>
<option>Karyawan</option>
</select>
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Lama Kerja</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="lama_kerja">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Status Kerja</label>
    <div class="col-sm-8">
    <select class="form-control" id="exampleFormControlSelect1" name="status_kerja">
<option>Pegawai Tetap</option>
<option>Pegawai Konrak</option>
</select>
    </div></div>

    <br><center><h3>Potongan</h3></center><br>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">BPJS</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="bpjs">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Pinjaman</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="pinjaman">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tabungan</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="tabungan">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Lainnya</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="lainnya">
    </div></div>
    <br><center><input type="submit" name="simpan" class="btn btn-primary" value="Submit"></center><br>

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
    
</div>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
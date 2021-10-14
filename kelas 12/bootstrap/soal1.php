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
  <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Diki</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="soal1.php">Penggajihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="soal2.php">Vaksin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="soal3.php">Pengulangan <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- Form -->
<div class="container">
    <br>
<center><h2>Program Penggajihan PT. GARUDA KELINCI AKUR</center></h2>
<br>
<form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Bendahara : </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_bendahara">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pekerja : </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_pekerja">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin : </label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-laki">
  <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>
<div class="form-group">
<br>    
<label for="exampleInputEmail1">Tanggal Gaji : </label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_gaji">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jabatan : </label>
    <select class="form-control" id="exampleFormControlSelect1" name="jabatan">
    <option>-- Pilih Jabatan --</option>
<option>Direktur</option>
<option>Manager</option>
<option>Karyawan</option>
<option>OB</option>
</select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Pendidikan Terakhir : </label>
    <select class="form-control" id="exampleFormControlSelect1" name="pendidikan_terakhir">
    <option>-- Pendidikan Terakhir --</option>
    <option>SD</option>
<option>SMP</option>
<option>SMA</option>
<option>S1</option>
</select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Lembur : </label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lembur">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Potongan : </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="potongan">
  </div>
<br>
<br>
  <input type="submit" name="simpan" class="btn btn-primary" value="Submit">
  <br><br>
    <?php
if(isset($_POST['simpan'])){
    $nama_bendahara = $_POST['nama_bendahara'];
    $nama_pekerja = $_POST['nama_pekerja'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];

    echo "<br><center><h2>Struk Gaji Karyawan</center><br>";
    echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>";  
    echo "<table align=right>";
    echo"<tr>";
    echo "<td>Tanggal</td>";
    echo "<td>:</td>";
    echo "<td><b><i>$tanggal_gaji</b></i></td></tr></table>";
echo"<table align=left>";
echo"<tr>";
echo"<td><b><i>Gaji Pokok</b></i></td>";
echo "</tr>";
echo "<tr>";
echo "<td><br>Nama Karyawan</td>";
echo "<td><br>:</td>";
echo "<td><br>$nama_pekerja</td></tr><br>";
echo"<tr>";
echo "<td>Jenis Kelamin</td>";
echo"<td>:</td>";
echo "<td>$jenis_kelamin</td></tr><br>";
echo"<tr>";
echo"<td>Pendidikan Terakhir</td>";
echo"<td>:</td>";
echo"<td>$pendidikan_terakhir</td></tr><br>";
echo"<tr>";
echo"<td>Jabatan</td>";
echo"<td>:</td>";
echo"<td>$jabatan</td></tr><br>";
if ($jabatan == "Direktur"){
    $hjabatan = 10000000;
    echo"<tr>";
    echo"<td>Gaji</td>";
    echo"<td>:</td>";
    echo"<td>Rp. $hjabatan</td></tr><br>";
} elseif ($jabatan == "Manager"){
    $hjabatan = 7500000;
    echo"<tr>";
    echo"<td>Gaji</td>";
    echo"<td>:</td>";
    echo"<td>Rp. $hjabatan</td></tr><br>";
} elseif ($jabatan == "Karyawan"){
    $hjabatan = 5000000;
    echo"<tr>";
    echo"<td>Gaji</td>";
    echo"<td>:</td>";
    echo"<td>Rp. $hjabatan</td></tr><br>";
} elseif ($jabatan == "OB"){
    $hjabatan = 2500000;
    echo"<tr>";
    echo"<td>Gaji</td>";
    echo"<td>:</td>";
    echo"<td>Rp. $hjabatan</td></tr><br>";
} 
echo "<tr>";
echo "<td><br><br><b><i>Tunjangan</b></i></td></tr><br><br>";
if ($pendidikan_terakhir == "SD"){
    $hpendidikan_terakhir = 250000;
    echo "<tr>";
    echo "<td><br>Tunjangan Pendidikan</td>";
    echo "<td><br>:</td>";
    echo "<td><br>Rp. $hpendidikan_terakhir</td></tr><br>";
} elseif ($pendidikan_terakhir == "SMP"){
    $hpendidikan_terakhir = 500000;
    echo "<tr>";
    echo "<td><br>Tunjangan Pendidikan</td>";
    echo "<td><br>:</td>";
    echo "<td><br>Rp. $hpendidikan_terakhir</td></tr><br>";
} elseif ($pendidikan_terakhir == "SMA"){
    $hpendidikan_terakhir = 1000000;
    echo "<tr>";
    echo "<td><br>Tunjangan Pendidikan</td>";
    echo "<td><br>:</td>";
    echo "<td><br>Rp. $hpendidikan_terakhir</td></tr><br>";
} elseif ($pendidikan_terakhir == "S1"){
    $hpendidikan_terakhir = 1500000;
    echo "<tr>";
    echo "<td><br>Tunjangan Pendidikan</td>";
    echo "<td><br>:</td>";
    echo "<td><br>Rp. $hpendidikan_terakhir</td></tr><br>";
}
$hlembur = $lembur * 20000;
echo "<tr>";
echo "<td>Vakasi Lembur</td>";
echo "<td>:</td>";
echo "<td>Rp. $hlembur</td></tr><br>";
echo "<tr><td><br><br><b><i>Potongan</b></i></td></tr>";
echo "<tr>";
echo "<td><br>Potongan</td>";
echo "<td><br>:</td>";
echo "<td><br>Rp. $potongan</td></tr>";
$total = $hjabatan + $hpendidikan_terakhir + $hlembur - $potongan;
echo "<tr>";
echo "<td><br><br><b><i>Total Gaji</td>";
echo "<td><br><br>:</td>";
echo "<td><br><br><b><i>Rp. $total</td></tr>";
echo "</table>";
echo "<table align=right>";
    echo"<tr>";
    echo "<td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Nama Bendahara</td>";
    echo "<td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>:</td>";
    echo "<td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><b><i>$nama_bendahara</b></i></td></tr></table>";
}
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
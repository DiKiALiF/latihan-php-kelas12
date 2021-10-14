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
<center><h2>Syarat Masuk Ke MIKO MALL</center></h2>
<br>
<form method="POST" action="">    
<div class="form-group">
    <label for="exampleInputEmail1">Nama : </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Umur : </label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="umur">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status Vaksin : </label>
    <select class="form-control" id="exampleFormControlSelect1" name="status_vaksin">
    <option>-- Status Vaksin --</option>
<option>Sudah Vaksin</option>
<option>Belum Vaksin</option>
</select>
</div>
<br>
<br>
  <input type="submit" name="simpan" class="btn btn-primary" value="Submit">
  <br><br>

    <?php
    
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $status_vaksin = $_POST['status_vaksin'];

    echo "<br><center>Nama Anda : $nama <br>";
    echo "Umur : $umur <br>";
    echo "Status Vaksin : $status_vaksin <br>";

if ($umur >= 12 && $umur <= 50 && $status_vaksin == "Sudah Vaksin"){
echo "<br><b><i>Diizinkan</b></i>";
} elseif ($umur <= 11 || $umur >= 51 && $status_vaksin == "Sudah Vaksin"){
    echo "<br><b><i>Tidak Diizinkan</b></i>";
    } elseif ($status_vaksin == "Belum Vaksin"){
echo "<br><b><i>Tidak Diizinkan</b></i><br><br>";
      
?><a href="https://pedulilindungi.id/">Daftar Vaksin Disini</a>
<?php
}
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
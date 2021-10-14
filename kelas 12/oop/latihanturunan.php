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
  <body background="new2.jpg">
<style>
  body {
    
  }
  </style>
<div class="container">
<div class="container">

  <center><img src="download.png" /><br><br>
<h2>PENGGAJIHAN<br>GURU/KARYAWAN YAYASAN ASSALAAM</h2></center><br/><br/>

<form method="POST" action="latihanturunan2.php">
<div class="card text-dark bg-light mb-3" style="max-width: 68rem;">
  <div class="card-header">Data Penggajihan</div>
  <div class="card-body">
    

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">No</label>
    <div class="col-sm-12">
      <input type="number" class="form-control" id="inputEmail3" name="no" placeholder="No">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" name="nama" placeholder="Nama">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Unit Pendidikan</label>
    <div class="col-sm-12">
    <select class="form-control" id="exampleFormControlSelect1" name="unit">
<option>--Pilih Unit Pendidikan--</option>
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
    <div class="col-sm-12">
      <input type="date" class="form-control" id="inputEmail3" name="tanggal">
    </div></div>

    <form>
      <div class="row">
        <div class="col">
<br><center><h3><i>Gaji</i></h3></center><br>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Jabatan</label>
    <div class="col-sm-8">
    <select class="form-control" id="exampleFormControlSelect1" name="jabatan">
<option>Kepala Sekolah</option>
<option>Guru</option>
<option>Karyawan</option>
</select>
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Lama Kerja</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="lama_kerja">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Status Kerja</label>
    <div class="col-sm-8">
    <select class="form-control" id="exampleFormControlSelect1" name="status_kerja">
<option>Pegawai Tetap</option>
<option>Pegawai Konrak</option>
</select>
    </div></div></div>
<div class="col">
    <br><center><h3><i>Potongan</i></h3></center><br>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">BPJS</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="bpjs">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Pinjaman</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="pinjaman">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Tabungan</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="tabungan">
    </div></div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Lainnya</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3" name="lainnya">
    </div></div>
    <div class="row">
    <br><center>
      <br><input type="submit" name="simpan" class="btn btn-primary" value="Submit"></center><br></div>
    </div>
    </div>
    </div>
    </div>
</form>
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
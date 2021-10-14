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
    <?php
include '../koneksi.php';
$donasi = new Donasi();
foreach ($donasi->show($_GET['id']) as $data) {
    $id = $data['id'];
    $tanggal = $data['tanggal'];
    $nama_donatur = $data['nama_donatur'];
    $metode_donasi = $data['metode_donasi'];
    $total_donasi = $data['total_donasi'];
    $keterangan = $data['keterangan'];

}
?>
    <fieldset>
        <legend>Show Data</legend>
        <table>
        <tr>
        <th>Tanggal</th>
                    <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Nama Donatur</th>
                    <td><input type="text" name="nama_donatur" value="<?php echo $nama_donatur; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Metode Donasi</th>
                    <td><input type="text" name="metode_donasi" value="<?php echo $metode_donasi; ?>"readonly></td>
                </tr>
                <tr>
                    <th>Total Donasi</th>
                    <td><input type="number" name="total_donasi" value="<?php echo $total_donasi; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td><input type="text" name="keterangan" value="<?php echo $keterangan; ?>" readonly></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                    
    </tr>
        </table>
    </fieldset>
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
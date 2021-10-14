<?php
if(isset($_POST['hitung'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;
    echo "Nama Barang = $nama <br>";
    echo "Harga Barang = $harga <br>";
    echo "Jumlah Barang = $jumlah <br>";
    echo "Total Belanjaan Anda = $total";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="latihan10.php">
<button type="submit">Kembali</button>
</form>
</body>
</html>

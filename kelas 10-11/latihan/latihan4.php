<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> Latihan Kondisi </h2>
<?php 

$uang = 8000;
$harga = 10000;

echo "Saya: Saya mau beli, uang saya cuman ada Rp.$uang Apa bisa?";
if ($uang < $harga) {
    $kurang = $harga - $uang;
    echo "<br/>Om nasi goreng: Ga bisa! Uang anda kurang Rp. $kurang !";
} else {
    echo "<br/>Om nasi goreng: Bisa kok!";
}
?>
</body>
</html>
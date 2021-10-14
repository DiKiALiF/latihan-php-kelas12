<?php
if (isset($_POST['Input'])){
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b> <br>";
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
<form method="post" action="dasar10.php">
<button type="submit">Kembali</button></form>
</body>
</html>
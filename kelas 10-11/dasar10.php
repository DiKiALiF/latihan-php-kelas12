<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengolahan Form</title>
</head>
<body>
    <form ACTION="proses7.php" METHOD="POST" NAME="input">
        Nama Anda: <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="Input"></input></form>
        <form method="post" action="cek.php">
<button type="submit">Kembali</button></form>
    
    
</body>
</html>
<?php
if (isset($_POST['Input'])){
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
}
?>
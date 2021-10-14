<?php
if (isset($_POST['pilih'])) {
    $jurusan = $_POST['jurusan'];
    echo "Jurusan anda adalah
    <b>$jurusan</b>";
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
    <br>
    <form method="post" action="dasar11.php">
<button type="submit">Kembali</button></form>
</body>
</html>
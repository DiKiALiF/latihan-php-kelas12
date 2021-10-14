<?php
$lampu = "green";

switch ($lampu) {
    case "red";
    echo "STOP! Anda harus berhenti";
break;
case "yellow";
echo "Harap hati-hati";
break;
case "green";
echo "Silahkan jalan!";
break;
default:
echo "Warna tidak sesuai";
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
    <form method="post" action="cek.php">
<button type="submit">Kembali</button></form>
</body>
</html>
<?php
$i = 0;
$j = 0;
while ($i < 5){
    for ($j = 0; $j < 5; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }
    $i++;
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
<form method="post" action="cek.php">
<button type="submit">Kembali</button></form>
</body>
</html>
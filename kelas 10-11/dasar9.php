<?php
// pengulangan for
for ($x = 0; $x < 5; $x++) {
    echo "Data: $x <br>";
}
// pengulangan while
$x=0;
while ($x < 5) {
    echo "Data: $x <br>";
    $x++;
}
// pengulangsn do while
$x = 0;
do {
    echo "Data: $x <br>";
    $x++;
} while ($x <= 5);
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
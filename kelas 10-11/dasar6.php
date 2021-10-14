<?php
$nilai = 88;
if ($nilai > 90) {
    $grade = "A+";
} elseif ($nilai > 80) {
    $grade = "A";
} elseif ($nilai > 70) {
    $grade = "B+";
} elseif ($nilai > 60) {
    $grade = "B";
} elseif ($nilai > 50) {
    $grade = "C+";
} elseif ($nilai > 40) {
    $grade = "C";
} elseif ($nilai > 30) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "Nilai Anda: $nilai<br>";
echo "Grade: $grade";

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <h2>Nilai Ujian Kelas 12 RPL</h2>
        <table border = "1">
            <tr>
                <th>Nama</th>
                <th>Matematika</th>
                <th>Bahasa Inggris</th>
                <th>Bahasa Indonesia</th>
                <th>Kejuruan</th>
                <th>Rata-rata</th>
                <th>Status</th>
                <th>Grade</th>
                </tr>
        <?php
        function nilaiUjian($nama, $mtk, $inggris, $indo, $kejuruan){
echo "<tr>";
echo "<td><center>{$nama}</td>";
echo "<td><center>{$mtk}</td>";
echo "<td><center>{$inggris}</td>";
echo "<td><center>{$indo}</td>";
echo "<td><center>{$kejuruan}</td>";
$rata = ($mtk + $inggris + $indo + $kejuruan) / 4; 
echo "<td><center>{$rata}</td>";
if ($rata > 75){
    echo "<td><center>Lulus</td>";
} elseif ($rata <= 75){
   echo "<td><center>Tidak Lulus</td>"; 
}
if ($rata >= 90){
    echo "<td><center>A</td>"; 
    } elseif ($rata >= 80){
    echo "<td><center>B</td>";
    } elseif ($rata >= 70){
    echo "<td><center>C</td>"; 
    } elseif ($rata >= 50){
    echo "<td><center>D</td>";    
    } else {
    echo "<td><center>E</td>"; 
    }
echo "</tr>";
        }
        nilaiUjian("Ujang", 90, 80, 70, 80);
        ?>
        </table>
<center>
</body>
</html>
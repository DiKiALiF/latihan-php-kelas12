<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indo = $_POST['indo'];
    $inggris = $_POST['inggris'];
    $mtk = $_POST['mtk'];
    $produktif = $_POST['produktif'];
    
}
?>
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
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border = "1">
            <tr>
            <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata-rata</th>
                <th>Grade</th>
                <th>Status</th>
</tr>
<?php
for($i=0; $i < count($nis); $i++){
    ?>
    <tr>
    <td><?php echo $nis[$i]; ?></td>
        <td><?php echo $nama[$i]; ?></td>
        <td><?php echo $kelas[$i]; ?></td>
        <td><?php echo $indo[$i]; ?></td>
        <td><?php echo $inggris[$i]; ?></td>
        <td><?php echo $mtk[$i]; ?></td>
        <td><?php echo $produktif[$i]; ?></td>
        <?php
        $total = $indo[$i] + $inggris[$i] + $mtk[$i] + $produktif[$i];
        $rata = $total / 4;
    ?>
        <td><?php echo $total; ?></td>
        <td><?php echo $rata; ?></td>
        
        <?php
if ($rata >= 90){
?><td><?php echo "Grade A"; ?></td>
<?php 
} elseif ($rata >= 80){
    ?><td><?php echo "Grade B"; ?></td>
    <?php
} elseif ($rata >= 70){
    ?><td><?php echo "Grade C"; ?></td>
    <?php
} elseif ($rata >= 50){
    ?><td><?php echo "Grade D"; ?></td>
    <?php
} elseif ($rata <= 49){
    ?><td><?php echo "Grade E"; ?></td>
    <?php
    }?>

        <?php
if ($rata > 75){
    ?><td><?php echo "Lulus"; ?></td>
<?php
} elseif ($rata <= 75){
    ?><td><?php echo "Tidak Lulus"; } ?></td>
    <?php
    }?>
    </tr>
</table>
</center>
</body>
</html>
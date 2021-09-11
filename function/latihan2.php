<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Perhitungan Bangun Ruang Lingkaran</legend>
        <form method = "POST" action = ""><br>
        Masukkan Bilangan : <input type="number" name = "r"></input>
                            <br><br>               
                            <input type="submit" name = "input" value = "Hitung"></input>
                            <br><br>
                            

            <?php
            if (isset($_POST['input'])){
                $r = $_POST['r'];
                
                function llingkaran($r, $phi = 3.14){
                    $luas = $phi * $r * $r;
                    return $luas;
                }
                function klingkaran($r, $phi = 3.14){
                    $keliling = 2 * $phi * $r;
                    return $keliling;
                }
                ?>
                <p>Jari-jari = <?php echo $r ; ?><br>
                Luas lingkaran = <?php echo llingkaran($r) ; ?><br>
                Keliling lingkaran = <?php echo klingkaran($r) ; } ?><br></p>

</form>
</fieldset>
</body>
</html>
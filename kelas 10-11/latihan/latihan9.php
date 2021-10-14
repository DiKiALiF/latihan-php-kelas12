<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2 class="judul">Borma Cibaduyut</h2>
    <form method="post" action="proses5.php">			
        Jumlah Jam Kerja = <input type="text" name="jam" class="jam" autocomplete="off">
        <br>
        Golongan Kerja = <input type="radio" name="gol" value="A" checked> A </input>
    <input type="radio" name="gol" value="B" checked> B </input>
    <input type="radio" name="gol" value="C" checked> C </input>
    <input type="radio" name="gol" value="D" checked> D </input>
        <br>											
    
    <input type="submit" name="hitung" value="hitung" class="tombol"></input>										
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <FORM ACTION="proses1.php" METHOD="POST" NAME="Input">
    <h2>Pilih Jurusan Anda !</h2>
    <input type="radio" name="jurusan" value="TI" checked>
    Teknik Informatika<br>
    <input type="radio" name="jurusan" value="SI" checked>
    Sistem Informasi<br>
    <input type="radio" name="jurusan" value="SK" checked>
    Sistem Komputer<br>
    <input type="radio" name="jurusan" value="KA" checked>
    Komputerisasi Akuntansi<br>
    <input type="submit" name="pilih" value="pilih">
    </form>
    <form method="post" action="cek.php">
<button type="submit">Kembali</button></form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film Kartun Favorit ~ Inputan Combo Box</title>
</head>
<body>
    <FORM ACTION="proses3.php" METHOD="POST" NAME="Input">
    <h2>Pilih Film Kartun Favorit Anda</h2>
    <select name="kartun">
    <option value="Sponge Bob">Sponge Bob</option>
    <option value="Sinchan">Sinchan</option>
    <option value="Conan">Conan</option>
    <option value="Doraemon">Doraemon</option>
    <option value="Dragon Ball">Dragon Ball</option>
    <option value="Naruto">Naruto</option>
    <input type="submit" name="pilih" value="pilih">
</FORM>
<br>
<form method="post" action="cek.php">
<button type="submit">Kembali</button></form>
</body>
</html>
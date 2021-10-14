<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Band Favorit ~ Inputan checkbox</title>
</head>
<body>
    <FORM ACTION="proses2.php" METHOD="POST" NAME="Input">
        <h2>Pilih Band Favorit Anda :</h2>
        <input type="checkbox" name="band01" value="Padi" checked>Padi<br>
        <input type="checkbox" name="band02" value="Sheila on 7" checked>Sheila on 7<br>
        <input type="checkbox" name="band03" value="Dewa 19" checked>Dewa 19<br>
        <input type="checkbox" name="band04" value="Ungu" checked>Ungu<br>
        <input type="submit" name="pilih" value="pilih"></input>
</FORM>
        <form method="post" action="cek.php">
<button type="submit">Kembali</button></form>
</body>
</html>
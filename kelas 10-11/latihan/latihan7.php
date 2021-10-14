<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Menentukan Angka Ganjil Genap</h2>
    <form method="post">
    Masukkan Angka =<input type="text" name="angka" required><br>
    <?php
    $angka=@$_POST['angka'];
    if (($angka && $angka) == "") {
        
    } elseif ($angka %2 == 0) {
        echo "$angka adalah bilangan genap<br>";
    } else {
        echo "$angka adalah bilangan ganjil<br>";
    }
?>
<br><input type="submit" value="Proses">
</form>
</body>
</html>
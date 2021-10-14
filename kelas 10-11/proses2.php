<?php
if (isset($_POST['pilih'])) {
    echo "Band Favorit Anda Adalah : <br>";
}
if (isset($_POST['band01'])) {
    echo "+ ".$_POST['band01']."<br>";
}
if (isset($_POST['band02'])) {
    echo "+ ".$_POST['band02']."<br>";
}
if (isset($_POST['band03'])) {
    echo "+ ".$_POST['band03']."<br>";
}
if (isset($_POST['band04'])) {
    echo "+ ".$_POST['band04']."<br>";
}
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
<form method="post" action="dasar12.php">
<button type="submit">Kembali</button></form>
</body>
</html>
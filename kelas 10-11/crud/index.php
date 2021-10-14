<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran User Baru</title>
</head>
<body>
<header>
<h2>Pendaftaran User Baru</h2>
</header>
<h3>Menu</h3>
<nav>
<ul>
<li><a href="form-daftar.php">Daftar Baru</a></li>
<li><a href="list-user.php">Pendaftar</a></li>
</ul>
</nav>
<?php if (isset($_GET['status'])):?>
<p>
<?php if($_GET['status'] ='sukses') {
    echo "Pendaftaran User Baru Berhasil";
} else {
    echo "Pendaftaran Gagal";
}
?>
<?php endif ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru SMK Assalaam</title>
</head>
<body>
<header>
<h2>Pendaftaran siswa baru</h2>
<h1>SMK Assalaam</h1>
</header>
<h3>Menu</h3>
<nav>
<ul>
<li><a href="form-daftar.php">Daftar Baru</a></li>
<li><a href="list-siswa.php">Pendaftar</a></li>
</ul>
</nav>
<?php if (isset($_GET['status'])):?>
<p>
<?php if($_GET['status'] ='sukses') {
    echo "Pendaftaran Siswa Baru Berhasil";
} else {
    echo "Pendaftaran Gagal";
}
?>
<?php endif ?>
</body>
</html>
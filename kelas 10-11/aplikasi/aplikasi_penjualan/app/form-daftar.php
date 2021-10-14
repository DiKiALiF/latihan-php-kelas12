<!DOCTYPE html>
<html>
<head>
<title> Data Pelanggan Baru</title>
</head>
<body>
<header>
<h2>Input Data Pelanggan</h2>
</header>
<form action = "proses-pendaftaran.php" method = "POST">
<fieldset>
<p>
<label for = "nama">Nama : </label>
<input type = "text" name = "nama" placeholder="nama lengkap">
</p>
<p>
<label for = "alamat">Alamat : </label>
<textarea name = "alamat"></textarea>
</p>
<p>
<label for = "telepon">No. Telepon : </label>
<input name = "telepon"></input>
</p>
<p>
<label for = "pekerjaan">Pekerjaan : </label>
<textarea name = "pekerjaan"></textarea>
</p>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</fieldset>
</body>
</html>
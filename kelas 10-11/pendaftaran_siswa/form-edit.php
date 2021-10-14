<?php

include("koneksi.php");

//kalau tidak ada id di query string
if(!isset($_GET['id']) ){
    header('location: list-siswa.php');
}

//ambil id di query string
$id = $_GET['id'];

//membuat query untuk ambil data dari database
$sql ="SELECT *FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db,$sql);
$siswa = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak di temukan 
if (mysqli_num_rows($query)<1){
    die("data tidak di temukan ");
}
?>
<html>
<head>
<title>formulir edit siswa |smk coding</title>
</head>

<body>
<header>
<h3> formulir edit siswa </h3>
</header>
<form action="proses-edit.php" method="POST">
<fieldset>
<input type="hidden" name="id" value="
<?php echo $siswa['id'] ?>" />
<P>
<label for="nama">nama: </label>
<input type ="text" name="nama"
placeholder="nama lengkap" value="
<?php echo $siswa['nama'] ?>" />
</p>
<p>
<label for="alamat">alamat: </label>
<textarea name="alamat">
<?php echo $siswa['alamat']?></textarea>
</p>
<p>
<label for="jenis_kelamin">jenis kelamin: </label>
<?php $jk =$siswa['jenis_kelamin']; ?>
<label><input type="radio" name="jenis_kelamin"
value="laki-laki" <?php echo ($jk == 'laki-laki') ?
"checked": "" ?>> laki-laki</label>
<label><input type="radio" name="jenis_kelamin"
value="perempuan" <?php echo ($jk == 'perempuan') ?
"checked": "" ?>> perempuan</label>
</p>
<p>
<label for="agama">agama: </label>
<?php $agama = $siswa['agama']; ?>
<select name="agama">
<option <?php echo ($agama == 'islam') ?
"selected": "" ?>>islam</option>
<option <?php echo ($agama == 'kristen') ?
"selected": "" ?>>kristen</option>
<option <?php echo ($agama == 'hindu') ?
"selected": "" ?>>hindu</option>
<option <?php echo ($agama == 'budha') ?
"selected": "" ?>>budha</option>
<option <?php echo ($agama == 'atheis') ?
"selected": "" ?>>atheis</option>
</select>
</p>
<p>
<label for="sekolah_asal"> sekolah asal: </label>
<input type="text" name="sekolah_asal"
placeholder="nama sekolah" value="
<?php echo $siswa['sekolah_asal'] ?>" />
</p>
<p>
<input type="submit" value="simpan" name="simpan" />
</p>

</fieldset>
</form>
</body>
</html>
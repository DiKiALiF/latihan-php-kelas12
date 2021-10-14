<?php

include("koneksi.php");

//kalau tidak ada id di query string
if(!isset($_GET['id']) ){
    header('location: list-user.php');
}

//ambil id di query string
$id = $_GET['id'];

//membuat query untuk ambil data dari database
$sql ="SELECT *FROM uts WHERE id=$id";
$query = mysqli_query($db,$sql);
$user = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak di temukan 
if (mysqli_num_rows($query)<1){
    die("data tidak di temukan ");
}
?>
<html>
<head>
<title>Formulir Edit User</title>
</head>
<body>
<header>
<h2> Formulir Edit User</h2>
</header>
<form action="http://localhost/diki/crud/proses-edit.php" method="POST">
<fieldset>
<input type="hidden" name="id" value="
<?php echo $user['id'] ?>" />
<P>
<label for="nama">Nama : </label>
<input type ="text" name="nama"
placeholder="Nama Lengkap" value="
<?php echo $user['nama'] ?>" />
</p>
<p>
<label for="username">Username : </label>
<input type ="text" name="username"
placeholder="Username" value="
<?php echo $user['username']?>" />
</p>
<p>
<label for="password">Password : </label>
<input type ="password" name="password"
placeholder="Password" value="
<?php echo $user['password']?>" />
</p>
<p>
<input type="submit" value="simpan" name="simpan" />
</p>

</fieldset>
</form>
</body>
</html>
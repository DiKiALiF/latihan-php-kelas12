<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form-daftar 
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$telepon=$_POST["telepon"];
$pekerjaan=$_POST["pekerjaan"];

//Query input menginput data kedalam tabel pelanggan
  $sql="insert into pelanggan (nama,alamat,telepon,pekerjaan) values
		('$nama','$alamat','$telepon','$pekerjaan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>
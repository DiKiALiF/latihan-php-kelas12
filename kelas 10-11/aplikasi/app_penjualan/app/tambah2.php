<!DOCTYPE html>
<head>
<title>Tambah Data Pelanggan</title>
<script language="javascript">
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
    if(document.frmpelanggan.txtkode.value==""){
        alert('Kode Pelanggan Harus Diisi');
        document.frmpelanggan.txtkode.focus();
        return false;
    } else if(document.frmpelanggan.txtnama.value==""){
        alert('Nama Harus Diisi');
        document.frmpelanggan.txtnama.focus();
        return false;
    } else if(document.frmpelanggan.txthalamat.value==""){
        alert('Alamat Harus Diisi');
        document.frmpelanggan.txtalamat.focus();
        return false;
    } else if(document.frmpelanggan.txtpekerjaan.value==""){
        alert('Pekerjaan Harus Diisi');
        document.frmpelanggan.txtpekerjaan.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>

<body>
<?php
//ini menu yang akan ada di semua halaman
include "menupelanggan.html";
?>
<br><caption align="top">
    Tambah Pelanggan
  </caption>
<form action="" method="post" name="frmpelanggan" onsubmit="return cekform()">
<table width="500" border="1">
  <tr>
    <td width="163">Kode Pelanggan </td>
    <td width="321"><input name="txtkode" type="text" id="txtkode" size="5" maxlength="5" /></td>
  </tr>
  <tr>
    <td>Nama </td>
    <td><input name="txtnama" type="text" id="txtnama" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><input name="txtalamat" type="text" id="txtalamat" /></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td><input name="txtpekerjaan" type="text" id="txtpekerjaan" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="tblIsi" type="submit" id="tblIsi" value="Tambah Pelanggan" /></td>
  </tr>
</table>

</form>
</body>
</html>
<?php
//include file koneksi ke mysql
include "koneksi.php";
//ini kalo tombol submitnya diklik
//perhatikan nama dari tombol tsb (tblIsi)
if(isset($_POST['tblIsi'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $kode = $_POST['txtkode'];
    $nama = $_POST['txtnama'];
    $alamat = $_POST['txtalamat'];
    $pekerjaan = $_POST['txtpekerjaan'];
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "INSERT INTO pelanggan VALUES('$kode','$nama','$alamat','$pekerjaan')";
    //jalankan kuerynya
    $kueri = mysqli_query($koneksi, $sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($kueri){
    //ini kalo TRUE
    //tampilin alert pake javascript aja deh
        echo "<script>alert('Data pelanggan berhasil dimasukkan ke database')</script>";
    } else {
    //ini kalo FALSE
        echo "<script>alert('Data pelanggan gagal dimasukkan ke database')</script>";
        //tampilkan pesan error mysqlnya
        echo mysqli_error();
    }
}
?>
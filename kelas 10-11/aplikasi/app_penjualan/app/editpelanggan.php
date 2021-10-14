<?php
  include "koneksi.php";
//cek dulu apakah parameter kode ada atau tidak
if(isset($_GET['kode'])){
   $kode = $_GET['kode'];
} else {
    //kalo gak ada  parameternya
    echo "<script>alert('Kode Pelanggan Belum Dipilih');document.
    location='daftarpelanggan.php'</script>";
}

//ambil data pelanggan dengan kode yang dipilih dan tampilkan dalam form
   $sql = "SELECT * FROM pelanggan WHERE kodepelanggan='$kode'";
   $kueri = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_array($kueri);
   //tampung masing-masing data ke dalam variabel
   $kode = $data['kodepelanggan'];
   $nama = $data['nama'];
   $alamat = $data['alamat'];
   $pekerjaan = $data['pekerjaan'];
?>
<!-- sekarang bikin formnya -->
<html>
<head><title>Edit Data Pelanggan</title>
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
    } else if(document.frmpelanggan.txtalamat.value==""){
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
Edit Pelanggan
<form action="" method="post" name="frmpelanggan" onsubmit="return cekform()">
<table width="500" border="1">
  <tr>
    <td width="163">Kode Pelanggan </td>
    <td width="321"><!-- textbox untuk kodepelanggan dibuat menjadi readonly. 
    Ini karena field kodepelanggan adalah Primary Key, sehingga tidak boleh diedit--><input name="txtkode" type="text" id="txtkode" size="5" maxlength="5" value="<?php echo $kode ?>" readonly/></td>
  </tr>
  <tr>
    <td>Nama </td>
    <td><input name="txtnama" type="text" id="txtnama" 
    value="<?php echo $nama?>"/></td>
  </tr>
  <tr>
    <td>Alamat </td>
    <td><input name="txtalamat" type="text" id="txtalamat" 
    value="<?php echo $alamat?>"/></td>
  </tr>
  <tr>
    <td>Pekerjaan </td>
    <td><input name="txtpekerjaan" type="text" id="txtpekerjaan" 
    value="<?php echo $pekerjaan?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="tblEdit" type="submit" id="tblEdit" value="Edit Pelanggan" /></td>
  </tr>
</table>

</form>
</body>
</html>
<?php
//ini kalo tombol editnya diklik
//perhatikan nama dari tombol edit nya (tblEdit)
if(isset($_POST['tblEdit'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $kode = $_POST['txtkode'];
    $nama = $_POST['txtnama'];
    $alamat = $_POST['txtalamat'];
    $pekerjaan = $_POST['txtpekerjaan'];
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "UPDATE pelanggan SET namapelanggan='$nama', 
    alamat='$alamat', pekerjaan='$pekerjaan' WHERE kodepelanggan='$kode'";
    //jalankan kuerynya
    $kueri = mysqli_query($koneksi, $sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($kueri){
    //ini kalo TRUE
    //tampilin alert pake javascript aja deh
        echo "<script>alert('Data pelanggan berhasil diedit'); 
        document.location='daftarpelanggan.php'</script>";
    } else {
    //ini kalo FALSE
        echo "<script>alert('Data pelanggan gagal diedit')</script>";
        //tampilkan pesan error mysqlnya
        echo mysqli_error();
    }
}
?>
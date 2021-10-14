<html>
<head>
<title>Tambah Data Pelanggan</title>
<script language="javascript">
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
    if(document.frmpesanan.txtno.value==""){
        alert('No Harus Diisi');
        document.frmpesanan.txtno.focus();
        return false;
    } else if(document.frmpesanan.txttanggal.value==""){
        alert('Tanggal Harus Diisi');
        document.frmpesanan.txttanggal.focus();
        return false;
    } else if(document.frmpesanan.txtnama.value==""){
        alert('Nama Harus Diisi');
        document.frmpesanan.txtnama.focus();
        return false;
    } else if(document.frmpesanan.txtnamabarang.value==""){
        alert('Nama Barang Harus Diisi');
        document.frmpesanan.txtnamabarang.focus();
        return false;
    } else if(document.frmpesanan.txtharga.value==""){
        alert('Harga Harus Diisi');
        document.frmpesanan.txtharga.focus();
        return false;
    } else if(document.frmpesanan.txtjumlah.value==""){
        alert('Jumlah Harus Diisi');
        document.frmpesanan.txtjumlah.focus();
        return false;
      } else if(document.frmpesanan.txttotal.value==""){
        alert('Total Harus Diisi');
        document.frmpesanan.txttotal.focus();
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
include "menupesanan.html";
?>    
<h3>Tambah Pesanan</h3>
    <form method="POST" name="frmpesanan" onsubmit="return cekform()">
        <table>
        <tr>
                <td>No</td>
                <td>:</td>
                <td><input type="number" name="notxt" id="notxt"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggaltxt" id="tanggaltxt"></td>
            </tr>
        <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="namatxt" id="namatxt"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td>
                <select name="namabarangtxt" id="namabarangtxt">
                        <option value="">- Pilih -</option>
                        <option value="Ayam Geprek">Ayam Geprek</option>
                        <option value="Ayam + Nasi">Ayam + Nasi</option>
                    </select>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="hargatxt" id="hargatxt"></td>
            </tr>
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select name="jumlahtxt" id="jumlahtxt">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
    <td>&nbsp;</td>
    <td><input name="tblIsi" type="submit" id="tblIsi" value="Tambah Pesanan" /></td>
  </tr>
        </table>
    </form>
    
</body>
</html>

<?php
//include file koneksi ke mysql
include "koneksi.php";
//ini kalo tombol submitnya diklik
//perhatikan nama dari tombol tsb 
if(isset($_POST['tblIsi'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $no = $_POST['notxt'];
    $tanggal = $_POST['tanggaltxt'];
    $nama = $_POST['namatxt'];
    $namabarang = $_POST['namabarangtxt'];
    $harga = $_POST['hargatxt'];
    $jumlah = $_POST['jumlahtxt'];
    $total = $harga*$jumlah;
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan urutan field yang ada dalam tabel
    $sql = "INSERT INTO pesanan VALUES('$no','$tanggal','$nama','$namabarang','$harga','$jumlah','$total')";
  //jalankan kuerynya
  $kueri = mysqli_query($koneksi, $sql);
  //cek apakah variabel $kueri bernilai TRUE atau FALSE
  if($kueri){
    //ini kalo TRUE
    //tampilin alert pake javascript aja deh
        echo "<script>alert('Pesanan berhasil dimasukkan ke database')</script>";
      } else {
  //ini kalo FALSE
      echo "<script>alert('Pesanan gagal dimasukkan ke database')</script>";
      //tampilkan pesan error mysqlnya
      echo mysqli_error();
  }
}
?>
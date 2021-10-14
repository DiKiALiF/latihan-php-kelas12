<?php
//cek dulu apakah parameter kode ada atau tidak
if(isset($_GET['kode'])){
   include "koneksi.php";
   //kalo ada berarti lakukan perintah delete
   $kode = $_GET['kode'];
   $sql = "DELETE FROM pelanggan WHERE kodepelanggan='$kode'";
   $kueri = mysqli_query($koneksi, $sql);
   if($kueri){
       //kalo deletenya berhasil
    //tampilkan alert dan pindah ke halaman daftar pelanggan
    echo "<script>alert('Data pelanggan berhasil dihapus');document.
    location='daftarpelanggan.php'</script>";
   } else{
   echo "<script>alert('Data pelanggan Gagal dihapus');document.
   location='daftarpelanggan.php'</script>";
   }
} else {
    //kalo gak ada  parameternya
    echo "<script>alert('Kode Barang Belum Dipilih');document.
    location='daftarpelanggan.php'</script>";
}
?>
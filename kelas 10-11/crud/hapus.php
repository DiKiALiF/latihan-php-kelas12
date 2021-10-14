<?php 
include("koneksi.php");
if(isset($_GET['id'])) {

    // ambil id dari query
    $id = $_GET['id'];

    // membuat query hapus
    $sql = "DELETE FROM uts WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: list-user.php');
    } else {
        die("Gagal Menghapus... ");
    }

} else {
    die("Akses Dilarang... ");
}
?>
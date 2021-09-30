<?php
class DataAnak extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $dataanak = mysqli_query($this->koneksi, "select * from data_anak");
        // var_dump($dataanak);
        return $dataanak;
    }

    // Menambah Data
    public function create($nama, $nama_pengasuh, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, 
    $pendidikan, $nama_ortu_wali, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into data_anak values(null,'$nama','$nama_pengasuh','$tempat_lahir', '$tanggal_lahir', 
            '$jenis_kelamin', '$pendidikan', '$nama_ortu_wali', '$alamat')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $dataanak = mysqli_query(
            $this->koneksi,
            "select * from data_anak where id='$id'"
        );
        return $dataanak;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $dataanak = mysqli_query(
            $this->koneksi,
            "select * from data_anak where id='$id'"
        );
        return $dataanak;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $nama_pengasuh, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $pendidikan, $nama_ortu_wali, 
    $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update data_anak set nama='$nama', nama_pengasuh='$nama_pengasuh', tempat_lahir='$tempat_lahir',
             tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', pendidikan='$pendidikan', 
             nama_ortu_wali='$nama_ortu_wali' 
             where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from data_anak where id='$id'");
    }
}
?>
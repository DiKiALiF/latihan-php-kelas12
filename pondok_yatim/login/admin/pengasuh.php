<?php
class Pengasuh extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datapengasuh = mysqli_query($this->koneksi, "select * from pengasuh");
        // var_dump($datapengasuh);
        return $datapengasuh;
    }

    // Menambah Data
    public function create($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $telepon)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pengasuh values(null,'$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin', '$alamat', '$telepon')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datapengasuh = mysqli_query(
            $this->koneksi,
            "select * from pengasuh where id='$id'"
        );
        return $datapengasuh;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datapengasuh = mysqli_query(
            $this->koneksi,
            "select * from pengasuh where id='$id'"
        );
        return $datapengasuh;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $telepon)
    {
        mysqli_query(
            $this->koneksi,
            "update pengasuh set tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nama='$nama' ,telepon='$telepon',
             alamat='$alamat', jenis_kelamin='$jenis_kelamin', telepon='$telepon'
             where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pengasuh where id='$id'");
    }
}
?>
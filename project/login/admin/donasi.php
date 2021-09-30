<?php
class Donasi extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datadonasi = mysqli_query($this->koneksi, "select * from donasi");
        // var_dump($datadonasi);
        return $datadonasi;
    }

    // Menambah Data
    public function create($tanggal, $nama_donatur, $metode_donasi, $total_donasi, $keterangan)
    {
        mysqli_query(
            $this->koneksi,
            "insert into donasi values(null,'$tanggal','$nama_donatur','$metode_donasi','$total_donasi','$keterangan')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datadonasi = mysqli_query(
            $this->koneksi,
            "select * from donasi where id='$id'"
        );
        return $datadonasi;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadonasi = mysqli_query(
            $this->koneksi,
            "select * from donasi where id='$id'"
        );
        return $datadonasi;
    }
    // mengupdate data berdasarkan id
    public function update($id, $tanggal, $nama_donatur, $metode_donasi, $total_donasi, $keterangan)
    {
        mysqli_query(
            $this->koneksi,
            "update donasi set tanggal='$tanggal', nama_donatur='$nama_donatur', metode_donasi='$metode_donasi',
            total_donasi='$total_donasi' ,keterangan='$keterangan' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from donasi where id='$id'");
    }
}
?>
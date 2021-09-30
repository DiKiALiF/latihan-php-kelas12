<?php
class Login extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datalogin = mysqli_query($this->koneksi, "select * from login");
        // var_dump($datalogin);
        return $datalogin;
    }

    // Menambah Data
    public function create($username, $pass, $user_level)
    {
        mysqli_query(
            $this->koneksi,
            "insert into login values(null,'$username','$password','$user_level')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datalogin = mysqli_query(
            $this->koneksi,
            "select * from login where id='$id'"
        );
        return $datalogin;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datalogin = mysqli_query(
            $this->koneksi,
            "select * from login where id='$id'"
        );
        return $datalogin;
    }
    // mengupdate data berdasarkan id
    public function update($id, $username, $pass, $user_level)
    {
        mysqli_query(
            $this->koneksi,
            "update login set username='$username', pass='$pass', user_level='$user_level' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from login where id='$id'");
    }
}
?>
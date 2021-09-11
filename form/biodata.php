<!DOCTYPE html>
<html>
    <head> 
        <title>Form Biodata Diri</title>
    </head>
    <body>
        <center>
<h2>Form Biodata Diri</h2>
<form method="POST" action="">
    <table>
         <tr>
         <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
<tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
</tr>
<tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
</tr>
<tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki</td>
            <td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
</tr>
<tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
</tr>
<tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name = "agama">
<option>Islam</option>
<option>Kristen</option>
<option>Hindu</option>
<option>Buddha</option>
<option>Konghucu</option>
</select>
</td>
</tr>
<tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td><select name = "pendidikan">
<option>SD</option>
<option>SMP</option>
<option>SMA/SMK</option>
<option>S1</option>
<option>S2</option>
</select>
</td>
</tr>
<tr>
            <td>Status</td>
            <td>:</td>
            <td><select name = "status">
<option>Belum Menikah</option>
<option>Menikah</option>
</select>
</td>
</tr>
<tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi" value="Membaca Buku">Membaca Buku</td>
            <td><input type="checkbox" name="hobi" value="Menonton Film">Menonton Film</td>
</tr>
<tr>
            <td></td>
            <td></td>
            <td><input type="checkbox" name="hobi" value="Main Bola">Main Bola</td>
            <td><input type="checkbox" name="hobi" value="Main PS">Main PS</td>
</tr>
<tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td><select name = "cita">
            <option>Programmer</option>
            <option>Guru</option>
            <option>Pilot</option>
            <option>Atlet</option>
            <option>Pengusaha</option>
</select>
</td>
</tr>
<tr>
            <td>Kata-kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata_bijak"></textarea></td>
</tr>
<tr>
    <td></td>
    <td></td>
<td>
<input type="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>
</body>
    </html>

    <?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata_bijak = $_POST['kata_bijak'];

echo "<br><b>=========== BIODATA DIRI =========== <br>";
echo "=================================== </b><br>";
echo "<i>Nama : $nama <br>";
echo "Tempat Lahir : $tempat_lahir <br>";
echo "Tanggal Lahir : $tanggal_lahir <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "Alamat : $alamat <br>";
echo "Agama : $agama <br>";
echo "Pendidikan Terakhir : $pendidikan <br>";
echo "Status : $status <br>";
echo "Hobi : $hobi <br>";
echo "Cita-cita : $cita <br>";
echo "Kata-kata Bijak : $kata_bijak <br>";
}
    ?>
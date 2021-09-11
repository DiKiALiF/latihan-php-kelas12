<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Biodata</legend>
        <form method="post" action="">
            <table align="left">
            <tr>
         <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
</tr>
<tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
</tr>
<tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name = "agama">
<option>-- Pilih Agama --</option>
<option>Islam</option>
<option>Kristen</option>
<option>Hindu</option>
<option>Buddha</option>
<option>Konghucu</option>
</select>
</td>
</tr>
<tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
</tr>
<tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="hobi[]" value="Membaca">Membaca</input>
            <input type="checkbox" name="hobi[]" value="Menonton Film">Menonton Film</input>
            <input type="checkbox" name="hobi[]" value="Menulis">Menulis</input>
            <input type="checkbox" name="hobi[]" value="Main Game">Main Game</input>
            <input type="checkbox" name="hobi[]" value="Traveling">Traveling</input>
            <input type="checkbox" name="hobi[]" value="Bermain Bola">Bermain Bola</input>
            </td>
</tr>
<tr>
    <td></td>
    <td></td>
<tr>
    <td></td>
    <td></td>
<td><input type="submit" name="simpan" value="KIRIM"><br></td></input>
</tr></tr>
<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    

    function tampilBiodata($nama, $jenis_kelamin, $tanggal_lahir, $agama, $alamat, $hobi){
        echo "<tr><td>";
        echo "<tr><td>Biodata";
        echo "<tr><td>";
        echo "<tr><td>Nama</td><td> : </td><td>" . $nama . "</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td> : </td><td>" . $jenis_kelamin . "</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td> : </td><td>" . $tanggal_lahir . "</td></tr>";
        echo "<tr><td>Agama</td><td> : </td><td>" . $agama . "</td></tr>";
        echo "<tr><td>Alamat</td><td> : </td><td>" . $alamat . "</td></tr>";
        echo "<tr><td>Hobi</td><td> : </td><tr>";
        for($i=0; $i < count($hobi); $i++){
        echo "<td><li>".$hobi[$i] . "</td></li></tr></tr>";
        }
        echo "";
    }
echo tampilBiodata($nama, $jenis_kelamin, $tanggal_lahir, $agama, $alamat, $hobi);
}

    ?>
</table>    
    </form>
</fieldset> 
    </body>
</html>
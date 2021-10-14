<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" class="form" action="proses4.php">
<center>
            <font size ="25px">
                BIODATA
            </font>
        </center>
    <table>
    <tr>
<td>NIS</td>
<td>:<input type="text" class="form" name="nis"></input></td>
</tr>
<br>
<tr>
<td>Nama Lengkap</td>
<td>:<input type="text" class="form" name="nama"></input></td>
</tr>
<br>
<tr>
<td>Jurusan</td>
<td>:<input type="radio" name="jurusan" value="T. Informatika" checked>
    T. Informatika
    <input type="radio" name="jurusan" value="T. Elektro" checked>
    T. Elektro
    <input type="radio" name="jurusan" value="T. Sipil" checked>
    T. Sipil
</td> </tr>
    <br>
    <tr>
    <td>Tempat dan Tanggal Lahir</td>
    <td>:<input type="text" class="form" name="home"></input>
    <select name="tanggal">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
    <select name="bulan">
    <option value="Januari">Januari</option>
    <option value="Februari">Februari</option>
    <option value="Maret">Maret</option>
    <option value="April">April</option>
    <option value="Mei">Mei</option>
    <option value="Juni">Juni</option>
    <option value="Juli">Juli</option>
    <option value="Agustus">Agustus</option>
    <option value="September">September</option>
    <option value="Oktober">Oktober</option>
    <option value="November">November</option>
    <option value="Desember">Desember</option>
</select>
<select name="tahun">
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2013">2012</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select>
</td></tr>
    <br>
    <tr>
    <td>Jenis Kelamin</td>
    <td>:<input type="radio" name="jk" value="Laki-laki" checked>
    Laki-laki
    <input type="radio" name="jk" value="Perempuan" checked>
    Perempuan</td></tr>
    <br>
    <tr>
    <td>Alamat</td>
    <td>:<textarea class="form" rows="3" name="alamat"></textarea></td></tr>
            <br>
            <tr>
            <td><button type="reset" name="pilih" value="pilih" class="btn btn-primary">Reset</button> 
            <button type="submit" name="pilih" value="pilih" class="btn btn-primary">Tambah</button>
</td></tr> 
        </table>      
</form>
</body>
</html>
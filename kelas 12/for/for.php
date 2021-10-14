<!DOCTYPE html>
<html>
    <head> 
        <title>For</title>
    </head>
    <body>
<h2>For</h2>
<form method="POST" action="">
    <table>
         <tr>
         <td>Masukkan Angka</td>
            <td>:</td>
            <td><input type="text" name="angka"></td>
        </tr>
        <tr>
    <td></td>
    <td></td>
<td>
<input type="submit" name="simpan" value="HITUNG"></td>
</tr>
        </table>
</form>
</body>
    </html>

<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
for($i=1; $i <= $angka; $i++){
    echo"Ini angka $i <br>";
}
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Form Pengulangan</title>
    </head>
    <body>
        <center>
<h2>Form Pengulangan</h2>
<form method="POST" action="">
    <table>
         <tr>
         <td>Masukkan Angka</td>
            <td>:</td>
            <td><input type="number" name="angka"></td>
        </tr>
        <tr>
    <td></td>
    <td></td>
<td>
<input type="submit" name="simpan" value="HITUNG"></td>
</tr>
        </table>
</form>
</center>
</body>
    </html>

    <?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    echo"<b>Mengurutkan dari terbesar : </b><br>";
for($a = $angka; $a >= 1; $a--){
    echo"$a ";
    
}
}
?>
<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    echo"<br>";
    echo"<br>";
    echo"<b>Bilangan genap : </b><br>";
for($i=1; $i <= $angka; $i++){
    if ($i %2 == 0) {
        echo"$i ";   
         
    } 
}
}
?>
<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    echo"<br>";
    echo"<br>";
    echo"<b>Segitiga</b><br>";
	for($a=$angka;$a>0;$a--){
	for($b=$angka;$b>=$a;$b--){
		
        echo "*";
	}
	echo "<br>";
	}
}
?>
<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    echo"<br>";
    echo"<b>Segitiga terbalik : </b><br>";
	for($a=1; $a<=$angka; $a++){
	for($c=$angka; $c>=$a; $c-=1){
		
        echo "*";
	}
	echo "<br>";
	}
}
?>
<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    echo"<br>";
    echo"<b>Segiiga sama kaki : </b><br>";
	for( $a=$angka;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$angka;$a1>=$a;$a1--){
		
        echo"*";
	}
	echo"<br>";
	}
}
?>
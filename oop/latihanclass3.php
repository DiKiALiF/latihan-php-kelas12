<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <form action="" method="post">
            <tr>
                
                <td><input type="text" name="angka1" id=""></td>
            <td>
                <select class="opt" name="operasi">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="X">x</option>
				<option value="/">/</option>
			</select></td>
                <td><input type="text" name="angka2" id=""></td>
           
                
                <td><input type="submit" name= "hitung" value="Hitung"></td>
            </tr>
        </form>
    </table>
</body>
</html>

<?php

if (isset($_POST["hitung"])) {
   $angka1 = $_POST['angka1'];
   $angka2 = $_POST['angka2'];
    $oprasi = $_POST['operasi'];
    
   class Matematika
   {
       public $x;
       public $y;
       public $z;
      
      

       public function tambah($x,$y,$z)
       {
           $this->x = $x;
           $this->y = $y;
           $this->z = $z;
           

           if ($z == "+") {
               
            $hasil = $x + $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
    
       }
       public function kurang($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        if ($z == "-") {
               
            $hasil = $x - $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
       }
       public function kali($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        if ($z == "X") {
               
            $hasil = $x * $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
           
       }
       public function bagi($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        
        if ($z == "/") {
               
            $hasil = $x / $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
       }
   }

   $data = new Matematika();
   $data->tambah($angka1,$angka2,$oprasi);
   $data->kurang($angka1,$angka2,$oprasi);
   $data->kali($angka1,$angka2,$oprasi);
   $data->bagi($angka1,$angka2,$oprasi);

   
   
   
}

?>
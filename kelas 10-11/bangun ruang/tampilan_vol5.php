<html>
 <head>
  <title>Hasil</title>
 </head>
 <body bgcolor="lightblue">
 <?php

 $r = $_GET['alas'];
 $t = $_GET['tinggi'];
 
 $V = ($r * $t);
 echo "<table border='2' bgcolor='black' style='color:blue'><tr><th colspan='2'>Jawabanya</th></tr>";
 echo "<tr><td colspan='2'>Diketahui</td><tr><td> >> Luas alasnya : </td><td> $r cm</td></tr><br>";
 echo "<tr><td> >> Tingginya : </td><td> $t cm</td></tr><br>";
 echo "<tr><td>Jadi volume prismanya adalah : </td><td><b><u> $V cm3 </u></b></td></tr>";
 ?>
 <form action='volume5.php'>
  <tr>
   <td>
    <input type='submit' name='submit1' value='Back'>
   </td>
 </form>
 <form action='Home.html'>
   <td>
    <input type='submit' name='submit2' value='Home'>
   </td>
  </tr>
 </table>
 </form>
 </body>
</html>
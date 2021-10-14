<html>
 <head>
  <title>Hasil</title>
 </head>
 <body bgcolor="lightblue">
 <?php
 $p = $_GET['panjang'];
 $l = $_GET['lebar'];
 $t = $_GET['tinggi'];
 $V = ( $p * $l * $t );
 echo "<table border='2' bgcolor='black' style='color:blue'><tr><th colspan='2'>Jawabanya</th></tr>";
 echo "<tr><td>Panjang : </td><td> $p cm </td></tr>";
 echo "<tr><td>Lebar : </td><td> $l cm </td></tr>";
 echo "<tr><td>Tinggi : </td><td> $t cm </td></tr>";
 echo "<tr><td>Jadi... Volume Baloknya adalah :</td><td><b><u> $V cm3 </b></u> </td></tr>";
 ?>
  <form action='volume2.php'>
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
 </body>
</html>
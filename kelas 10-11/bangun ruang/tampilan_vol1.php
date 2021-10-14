<html>
 <head>
  <title>Hasil</title>
 </head>
 <body bgcolor="lightblue">
 <?php

 $r = $_GET['rusuk'];

 $V = (6 * $r);
 echo "<table border='2' bgcolor='black' style='color:blue'><tr><th colspan='2'>Jawabanya</th></tr>";
 echo "<tr><td colspan='2'>Diketahui</td><tr><td> >> Panjang rusuknya : </td><td> $r cm</td></tr><br>";
 echo "<tr><td>Jadi volume kubusnya adalah : </td><td><b><u> $V cm3 </u></b></td></tr>";
 ?>
 <form action='volume1.php'>
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
<?php
// File json yang akan dibaca
$file = "movie2.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Tampilan
echo "<center>Data Film <br>";
echo "<b>" . $data['Title'] . "</b><br><br>";
echo "<img src=img/spider-verse.jpg width=350px /><center>";

echo "<br>";
echo "<table align=left>";
echo "<tr>";
echo "<td><b>Plot </b></td><td>:</td> <td>" . $data['Plot'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Tahun Rilis </b></td><td>:</td> <td>" . $data['Year'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Tanggal Rilis </b></td><td>:</td> <td>" . $data['Released'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Durasi Film </b></td><td>:</td> <td>" . $data['Runtime'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Genre</b></td>";
echo "<td>:</td>";
echo "<td>";
echo implode(" ",$data['Genre']);
echo "<td></tr>";
echo "<tr>";
echo "<td><b>Director </b></td><td>:</td> <td>" . $data['Director'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Penulis</b></td>";
echo "<td>:</td>";
echo "<td><li>" . $data['Writers'][0] . "</li></td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td><li>" . $data['Writers'][1] . "</li></td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td><li>" . $data['Writers'][2] . "</li></td>";
echo "</tr>";
echo "<tr>";
echo "<td><b>Pemeran</b></td>";
echo "<td>:</td>";
echo "<td><li>" . $data['Actors'][0] . "</li></td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td><li>" . $data['Actors'][1] . "</li></td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td><li>" . $data['Actors'][2] . "</li></td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td><li>" . $data['Actors'][3] . "</li></td>";
echo "</tr>";
echo "<tr>";
echo "<td><b>Bahasa </b></td><td>:</td> <td>" . $data['Language'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Negara </b></td><td>:</td> <td>" . $data['Country'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Penghargaan </b></td><td>:</td> <td>" . $data['Awards'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Nilai </b></td><td>:</td> <td>" . $data['imdbRating'] . "</td></tr>";
echo "<tr>";
echo "<td><b>Vote </b></td><td>:</td> <td>" . $data['imdbVotes'] . " Orang </td></tr>";
echo "<tr>";
echo "<td><b>imdbID </b></td><td>:</td> <td>" . $data['imdbID'] . "</td></tr>";
?>
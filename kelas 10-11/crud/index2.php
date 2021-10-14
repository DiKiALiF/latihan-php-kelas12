<?php
$sql = "SELECT * FROM uts";
$query = mysqli_query($db,$sql);

if ($user['password']==$password) {
    echo "Selamat Datang ".$user['nama']."</tr>";
    } else {
        header("location:index2.php?pesan=sukses");
    }
echo "<td>".$user['id']."</td>";
}
?>
<a href="logout.php">LOGOUT</a>
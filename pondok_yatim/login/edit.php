<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../koneksi.php';
$login = new Login();
foreach ($login->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $username = $data['username'];
    $pass = $data['pass'];
    
}
?>
    <fieldset>
        <legend>Edit Data</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" value="<?php echo $username; ?>" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="pass" value="<?php echo $pass; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
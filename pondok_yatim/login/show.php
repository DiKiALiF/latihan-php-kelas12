<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>

<body>
    <?php
include '../koneksi.php';
$login = new Login();
foreach ($login->show($_GET['id']) as $data) {
    $id = $data['id'];
    $username = $data['username'];
    $pass = $data['pass'];
}
?>
    <fieldset>
        <legend>Show Data</legend>
        <table>
            <tr>
                <th>Username</th>
                <td><input type="username" name="username" value="<?php echo $username; ?>" readonly></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="pass" name="pass" value="<?php echo $pass; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>
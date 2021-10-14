<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>

<body>
    <fieldset>
        <legend>Input Data Dosen</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="pass" required></td>
                </tr> 
                <tr>
                    <th>User Level</th>
                    <td><input type="text" name="user_level" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
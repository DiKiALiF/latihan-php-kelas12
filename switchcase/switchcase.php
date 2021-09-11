<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h2>Switch Case</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Masukan Angka</td>
                <td>:</td>
<td><input type="text" name="angka"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $angka=$_POST;

    switch($angka){
        case 1:
            echo "Ini variabel angka satu";
            break;
            case 2:
                echo "Ini variabel angka dua";
                break;
                case 3:
                    echo "Ini variabel angka tiga";
                    break;
                    case 4:
                        echo "Ini variabel angka empat";
                        break;
                        case 5:
                            echo "Ini variabel angka lima";
                            break;
                            case 6:
                                echo "Ini variabel angka enam";
                                break;
                                default:
                                echo "Ini variabel tidak ditemukan";
    }
}
?>
<?php
include '../database.php';
$login = new Login();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $user_levels = $_POST['user_level'];

    if ($aksi == "create") {
        $login->create($username, $pass, $user_level);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $login->update($id, $username, $pass, $user_level);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $login->delete($id);
        header("location:index.php");
    }

}
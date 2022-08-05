<?php
include '../koneksi.php';

if (isset($_POST['buat'])) {
    $user   = $_POST['user'];
    $name   = $_POST['name'];
    $sandi = md5($_POST['sandi']);

    //sql insert to akun
    $sql = "INSERT INTO user (username, nama, password) VALUES ('$user','$name','$sandi')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('location:../register.php?message=success');
    } else {
        header('location:../register.php?message=failed');
    }
}

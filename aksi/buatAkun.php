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
        echo "<script type='text/Javascript'>alert('Akun berhasil dibuat! Silahkan login.')</script>";
        header('location:../login.php');
    } else {
        echo "<script type='text/Javascript'>alert('Akun gagal dibuat')</script>";
        header('location:../register.php');
    }
}

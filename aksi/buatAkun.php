<?php
include '../koneksi.php';

if (isset($_POST['create'])) {
    $username   = $_POST['username'];
    $nama   = $_POST['nama'];
    $password = md5($_POST['sandi']);

    //sql insert to akun
    $sql = "INSERT INTO user (username, nama, password) VALUES ('$username','$nama','$password')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script type='text/Javascript'>alert('Akun berhasil dibuat! Silahkan login.')</script>";
        header('location:../login.php');
    } else {
        echo "<script type='text/Javascript'>alert('Akun gagal dibuat')</script>";
        header('location:../register.php');
    }
}

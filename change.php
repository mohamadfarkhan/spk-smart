<?php
include 'koneksi.php';
if (isset($_POST['ganti'])) {
    $username = $_POST['username'];
    $password_baru = md5($_POST['password_baru']);
    $sql = "UPDATE user set
            password ='$password_baru'
            where username = '$username'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Kata Sandi Berhasil Diubah, Silahkan Login Ulang.')</script>";
        header("location:logout.php");
    } else {
        echo "<script>alert('Ubah Kata Sandi Gagal, Periksa kembali koneksi internet anda.')</script>";
        header("location:index.php");
    }
}

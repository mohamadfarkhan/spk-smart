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
        header("location:logout.php");
    } else {
        header("location:index.php?message=failed");
    }
}

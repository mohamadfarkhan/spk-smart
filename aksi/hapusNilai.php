<?php
session_start();
include '../koneksi.php';

if (isset($_GET['name'])) {

    $id = $_GET['name'];
    mysqli_query($conn, "DELETE FROM nilai WHERE nama_anggota = '$id'");
    echo "<script>alert ('berhasil menghapus')</script>";
    header("location:../nilai.php");
} else {
    echo "<h1>404 NOT FOUND</h1>";
}

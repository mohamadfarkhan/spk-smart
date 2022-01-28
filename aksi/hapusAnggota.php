<?php
session_start();
include '../koneksi.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota = '$id'");
    mysqli_query($conn, "DELETE FROM nilai WHERE nama_anggota = '$id'");
    echo "<script type='text/Javascript'>alert ('berhasil menghapus')</script>";
    header("location:../anggota.php");
} else {
    echo "<h1>404 NOT FOUND</h1>";
}

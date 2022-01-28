<?php
session_start();
include '../koneksi.php';

if (isset($_GET['name'])) {

    $id = $_GET['name'];
    mysqli_query($conn, "DELETE FROM kriteria WHERE nama_kriteria = '$id'");
    echo "<script>alert ('berhasil menghapus')</script>";
    header("location:../kriteria.php");
} else {
    echo "<h1>404 NOT FOUND</h1>";
}

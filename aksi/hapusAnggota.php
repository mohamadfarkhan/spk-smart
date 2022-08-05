<?php
session_start();
include '../koneksi.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM anggota WHERE nama_anggota = '$id'");
    mysqli_query($conn, "DELETE FROM nilai WHERE nama_anggota = '$id'");
    header("location:../dataAnggota.php?message=deleted");
} else {
    echo "<h1>404 NOT FOUND</h1>";
}

<?php
session_start();
include '../koneksi.php';

if (isset($_GET['name'])) {

    $id = $_GET['name'];
    mysqli_query($conn, "DELETE FROM nilai WHERE nama_anggota = '$id'");
    header("location:../dataNilai.php?message=deleted");
} else {
    echo "<h1>404 NOT FOUND</h1>";
}

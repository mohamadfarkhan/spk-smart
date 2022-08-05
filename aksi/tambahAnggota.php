<?php
include '../koneksi.php';

if (isset($_POST['tambah'])) {
    $nama   = $_POST['nama'];
    $kelamin   = $_POST['kelamin'];
    $korwilda = $_POST['korwilda'];
    $noHp   = $_POST['noHp'];
    // var_dump($nama,$kelamin,$korwilda, $noHp);
    // die;

    //sql insert to anggota
    $sql = "INSERT INTO anggota (nama_anggota, kelamin, korwilda, no_hp) VALUES ('$nama','$kelamin','$korwilda','$noHp')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location:../anggota.php?message=success");
    } else {
        header("location:../anggota.php?message=failed");
    }
} else {
}

<?php
include '../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama   = $_POST['nama'];
    $kelamin   = $_POST['kelamin'];
    $korwilda = $_POST['korwilda'];
    $noHP   = $_POST['noHp'];
    $sql = "UPDATE anggota set
            nama_anggota='$nama',
            kelamin='$kelamin',
            korwilda='$korwilda',
            no_hp='$noHP'
            where id_anggota = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:../dataAnggota.php?message=success");
    } else {
        header("location:../dataAnggota.php?message=failed");
    }
}

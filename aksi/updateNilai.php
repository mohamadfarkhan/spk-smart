<?php
include '../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama   = $_POST['nama'];
    $np   = $_POST['np'];
    $jk   = $_POST['jk'];
    $fg   = $_POST['fg'];
    //sql update to nilai
    $sql = "UPDATE nilai set
            nama_anggota='$nama',
            n_pengetahuan='$np',
            n_kopdar='$jk',
            n_famgath='$fg'
            where id_nilai = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:../dataNilai.php?message=success");
    } else {
        header("location:../dataNilai.php?message=failed");
    }
}

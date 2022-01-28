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
        echo "<script>alert('Data Alternatif Berhasil di Update')</script>";
        header("location:../dataNilai.php");
    } else {
        echo "<script>alert('Update data gagal, silahkan coba lagi!')</script>";
        header("location:../dataNilai.php");
    }
}

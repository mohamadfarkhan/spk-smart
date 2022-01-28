<?php
include '../koneksi.php';

if (isset($_POST['tambah'])) {
    $nama   = $_POST['nama'];
    $np   = $_POST['np'];
    $jk = $_POST['jk'];
    $fg = $_POST['fg'];
    //sql insert to anggota
    $sql = "INSERT INTO nilai (nama_anggota, n_pengetahuan, n_kopdar, n_famgath)
            VALUES ('$nama','$np','$jk','$fg')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script type='text/Javascript'>alert('berhasil memasukkan data Alternatif')</script>";
        header('location:../dataNilai.php');
    } else {
        echo "<script type='text/Javascript'>alert('Gagal Memasukkan data')</script>";
        header('location:../dataNilai.php');
    }
} else {
}

<?php
include '../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kriteria   = $_POST['kriteria'];
    $bobot   = $_POST['bobot'];
    $sql = "UPDATE kriteria set
            nama_kriteria='$kriteria',
            bobot='$bobot'
            where id_kriteria = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Data Alternatif Berhasil di Update')</script>";
        header("location:../kriteria.php");
    } else {
        echo "<script>alert('Update data gagal, silahkan coba lagi!')</script>";
        header("location:../kriteria.php");
    }
}

<?php
include '../koneksi.php';

if (isset($_POST['tambah'])) {
    $kriteria   = $_POST['kriteria'];
    $bobot   = $_POST['bobot'];
    // var_dump($kriteria,$bobot);
    // die;

    //sql insert to kriteria
    $sql = "INSERT INTO kriteria (nama_kriteria, bobot) VALUES ('$kriteria','$bobot')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script type='text/Javascript'>alert('berhasil memasukkan data Alternatif')</script>";
        header('location:../kriteria.php');
    } else {
        echo "<script type='text/Javascript'>alert('Gagal Memasukkan data')</script>";
        header('location:../kriteria.php');
    }
}

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
        echo "<script>alert('Data Alternatif Berhasil di Update')</script>";
        header("location:../dataAnggota.php");
    } else {
        echo "<script>alert('Update data gagal, silahkan coba lagi!')</script>";
        header("location:../dataAnggota.php");
    }
}

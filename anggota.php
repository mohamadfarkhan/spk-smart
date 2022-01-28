<?php
include 'cek.php';
include 'templates/head.php';
include 'templates/nav.php';
include 'koneksi.php';
?>

<div class="container-fluid fixed">
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Anggota
                        <a href="dataAnggota.php" class="btn btn-info float-right">Data Anggota</a>
                    </h1>
                </div>
                <div class="card-body">
                    <form role="form" action="aksi/tambahAnggota.php" method="POST">
                        <div class="form-group">
                            <label for="">Nama Anggota Baru</label>
                            <input required type="text" class="form-control" name="nama" placeholder="Nama anggota baru">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select required name="kelamin" class="form-control">
                                <option value="Pilih Jenis Kelamin">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Korwil / Korda</label>
                            <input required type="text" class="form-control" name="korwilda" placeholder="Kordinator Wilayah / Daerah setempat">
                        </div>
                        <div class="form-group">
                            <label for="">No HP</label>
                            <input required type="text" class="form-control" name="noHp" placeholder="No Handphone / WA">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="tambah" class="btn btn-primary float-right" value="Tambah Data">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

<?php
include 'templates/footer.php';
?>
</div>
<!-- End of Page Wrapper -->

<!-- Hapus Modal-->
<?php
$sql = "SELECT * FROM anggota";
$query = mysqli_query($conn, $sql);
$anggota = mysqli_fetch_assoc($query);
?>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan Hapus Data !!!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin menghapus data ini ???</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="aksi/hapusAnggota.php?id=<?= $anggota['id_anggota']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'templates/foot.php';
?>
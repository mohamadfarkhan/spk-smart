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
                    <h1>Update Data Anggota
                    </h1>
                </div>
                <?php
                $id_anggota = $_GET['id'];
                $sql = "SELECT * FROM anggota Where id_anggota=$id_anggota";
                $dataAnggota = mysqli_query($conn, $sql);
                $tampilAnggota = mysqli_fetch_array($dataAnggota);
                ?>
                <div class="card-body">
                    <form role="form" action="aksi/updateAnggota.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $tampilAnggota['id_anggota']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Anggota Baru</label>
                            <input required type="text" class="form-control" name="nama" value="<?php echo $tampilAnggota['nama_anggota']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select required name="kelamin" class="form-control" value="<?php echo $tampilAnggota['kelamin']; ?>">
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Korwil / Korda</label>
                            <input required type="text" class="form-control" name="korwilda" value="<?php echo $tampilAnggota['korwilda']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">No HP</label>
                            <input required type="text" class="form-control" name="noHp" value="<?php echo $tampilAnggota['no_hp']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="update" class="form-control btn btn-primary form-control" value="Update Data">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->

<?php
include 'templates/footer.php';
?>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Hapus Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan Hapus Data !!!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin menghapus data ini ?!</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="aksi/hapusAnggota.php?name=<?= $anggota['id_anggota']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'templates/foot.php';
?>
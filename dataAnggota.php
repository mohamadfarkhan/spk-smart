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
                    <h1>Data Anggota
                        <a href="anggota.php" class="btn btn-info float-right">Tambah Anggota</a>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Anggota</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Korwil / Korda</th>
                                    <th scope="col">No HP/WA</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Mengambil data anggota dari database -->
                                <?php
                                include 'koneksi.php';
                                $sql = "SELECT * FROM anggota";
                                $query = mysqli_query($conn, $sql);
                                $n = 1;
                                while ($anggota = mysqli_fetch_array($query)) :

                                ?>
                                    <tr>
                                        <td><?= $n++ ?></td>
                                        <td><?= $anggota['nama_anggota'] ?></td>
                                        <td><?= $anggota['kelamin'] ?></td>
                                        <td><?= $anggota['korwilda'] ?></td>
                                        <td><?= $anggota['no_hp'] ?></td>
                                        <td>
                                            <a href="updateAnggota.php?id=<?php echo $anggota['id_anggota']; ?>" class="btn btn-warning"><i class="fa fa-edit fa-fw"></i>
                                            </a>
                                            <a href='' class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $n ?>"><i class="fa fa-trash fa-fw"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Hapus Modal-->
                                    <div class="modal fade" id="deleteModal<?= $n ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <a class="btn btn-primary" href="aksi/hapusAnggota.php?id=<?= $anggota['nama_anggota']; ?>">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
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

<?php
include 'templates/foot.php';
?>
<?php
include 'cek.php';
include 'templates/head.php';
include 'templates/nav.php';
include 'koneksi.php';
?>

<div class="container-fluid fixed">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <h1>Data Penilaian
                        <a href="nilai.php" class="float-right btn btn-info">Masukkan Nilai</a>
                    </h1>
                </div>
                <?php
                if (isset($_GET['message'])) {
                    if ($_GET['message'] == "success") {
                        echo "
                            <div class='alert alert-success ml-3 mr-3 mt-5'>
                            Nilai Berhasil diubah!
                            </div>
                        ";
                    } else if ($_GET['message'] == "failed") {
                        echo "
                            <div class='alert alert-danger ml-3 mr-3 mt-5'>
                            Mohon coba lagi dan periksa kembali koneksi anda!
                            </div>
                        ";
                    } else if ($_GET['message'] == "deleted") {
                        echo "
                            <div class='alert alert-danger ml-3 mr-3 mt-5'>
                            Nilai berhasil dihapus!
                            </div>
                        ";
                    }
                }
                ?>
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead align="center">
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Nama Anggota</th>
                                        <th colspan="3">Nilai</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>Pengetahuan</th>
                                        <th>Kopdar</th>
                                        <th>Family Gathering</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- mengeluarkan data siswa dari database -->
                                    <?php
                                    $sql = "SELECT * FROM nilai";
                                    $query = mysqli_query($conn, $sql);
                                    $n = 1;
                                    while ($anggota = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $n ?></td>
                                            <td><?= $anggota['nama_anggota'] ?></td>
                                            <td class="text-right"><?= $anggota['n_pengetahuan'] ?></td>
                                            <td class="text-right"><?= $anggota['n_kopdar'] ?></td>
                                            <td class="text-right"><?= $anggota['n_famgath'] ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="updateNilai.php?id=<?php echo $anggota['id_nilai'] ?>"><i class="fa fa-edit fa-fw"></i></a>
                                                <a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash fa-fw"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                        $n++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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

<!-- Hapus Modal-->
<?php
$sql = "SELECT * FROM nilai";
$query = mysqli_query($conn, $sql);
$nilai = mysqli_fetch_assoc($query);
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
                <a class="btn btn-primary" href="aksi/hapusNilai.php?name=<?= $nilai['nama_anggota']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'templates/foot.php';
?>
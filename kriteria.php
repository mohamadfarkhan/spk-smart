<?php
include 'cek.php';
include 'templates/head.php';
include 'templates/nav.php';
include 'koneksi.php';
?>

<div class="container-fluid fixed">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Kriteria</h1>
                </div>
                <div class="card-body">
                    <form role="form" action="aksi/tambahKriteria.php" method="POST">
                        <div class="form-group">
                            <label for="">Kriteria</label>
                            <input required type="text" class="form-control" name="kriteria" placeholder="Masukkan kriteria...">
                        </div>
                        <div class="form-group">
                            <label for="">Bobot Kriteria</label>
                            <input required type="text" class="form-control" name="bobot" placeholder="Masukkan bobot kriteria...">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="tambah" class="btn btn-primary float-right" value="Tambah Kriteria">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h1>Data Kriteria</h1>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Kriteria</th>
                                <th class="text-center">Bobot Kriteria</th>
                                <th class="text-center">Bobot Relatif</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //Menjumlahkan bobot untuk mencari bobot relatif
                            $sqljumlah = "SELECT SUM(bobot) FROM kriteria";
                            $queryjumlah = mysqli_query($conn, $sqljumlah);
                            $jumlah0 = mysqli_fetch_array($queryjumlah);
                            $jumlah = $jumlah0[0];

                            // Mengambil data kriteria dari database
                            $sql = "SELECT * FROM kriteria";
                            $query = mysqli_query($conn, $sql);
                            $n = 1;
                            $jumlahkriteria = mysqli_num_rows($query);
                            while ($kriteria = mysqli_fetch_array($query)) {

                            ?>
                                <tr>
                                    <td class="text-center"><?= $n ?></td>
                                    <td><?= $kriteria['nama_kriteria'] ?></td>
                                    <td class="text-center"><?= $kriteria['bobot'] ?></td>
                                    <td class="text-center"><?= round($kriteria['bobot'] / $jumlah, $jumlahkriteria) ?></td>
                                    <td class="text-center">
                                        <a href="updateKriteria.php?id=<?php echo $kriteria['id_kriteria']; ?>" class="btn btn-warning"><i class="fa fa-edit fa-fw"></i></a>
                                        <a href='' class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $n ?>"><i class="fa fa-trash fa-fw"></i></a>
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
<!-- End of Main Content -->
<?php
include 'templates/footer.php';
?>


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Hapus Modal-->
<?php
$sql = "SELECT * FROM kriteria";
$query = mysqli_query($conn, $sql);
$kriteria = mysqli_fetch_assoc($query);
?>
<div class="modal fade" id="deleteModal<?= $n ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="aksi/hapusKriteria.php?name=<?= $kriteria['nama_kriteria']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'templates/foot.php';
?>
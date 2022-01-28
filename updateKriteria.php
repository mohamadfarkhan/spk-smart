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
                    <h1>Update Kriteria</h1>
                </div>
                <?php
                $id_kriteria = $_GET['id'];
                $sql = "SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'";
                $dataKriteria = mysqli_query($conn, $sql);
                $tampilKriteria = mysqli_fetch_array($dataKriteria);
                ?>
                <div class="card-body">
                    <form role="form" action="aksi/updateKriteria.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $tampilKriteria['id_kriteria']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Kriteria</label>
                            <input readonly type="text" class="form-control" name="kriteria" value="<?php echo $tampilKriteria['nama_kriteria']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Bobot Kriteria</label>
                            <input required type="text" class="form-control" name="bobot" value="<?php echo $tampilKriteria['bobot']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="update" class="form-control btn btn-primary form-control" value="Update Kriteria">
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
                            <!-- Mengambil data kriteria dari database -->
                            <?php
                            $sqljumlah = "SELECT SUM(bobot) FROM kriteria";
                            $queryjumlah = mysqli_query($conn, $sqljumlah);
                            $jumlah0 = mysqli_fetch_array($queryjumlah);
                            $jumlah = $jumlah0[0];

                            $sql = "SELECT * FROM kriteria";
                            $query = mysqli_query($conn, $sql);
                            $n = 1;
                            while ($kriteria = mysqli_fetch_array($query)) {

                            ?>
                                <tr>
                                    <td class="text-center"><?= $n ?></td>
                                    <td><?= $kriteria['nama_kriteria'] ?></td>
                                    <td class="text-center"><?= $kriteria['bobot'] ?></td>
                                    <td class="text-center"><?= round($kriteria['bobot'] / $jumlah, 3) ?></td>
                                    <td class="text-center">
                                        <a href="updateKriteria.php?id=<?php echo $kriteria['id_kriteria']; ?>" class="btn btn-warning"><i class="fa fa-edit fa-fw"></i></a>
                                        <a href='' class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash fa-fw"></i></a>
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
            <div class="modal-body">Apakah anda yakin ingin menghapus data ini ???</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="aksi/hapusKriteria.php?name=<?= $kriteria['id_anggota']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'templates/foot.php';
?>
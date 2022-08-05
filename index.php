<?php
include 'cek.php';
include 'templates/head.php';
include 'templates/nav.php';
include 'koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <?php
  if (isset($_GET['message'])) {
    if ($_GET['message'] == "success") {
      echo "
        <div class='alert alert-success'>
          Selamat datang, $_SESSION[username]
        </div>
      ";
    } else if ($_GET['message'] == "failed") {
      echo "
        <div class='alert alert-danger'>
          Mohon coba lagi dan periksa kembali koneksi anda!
        </div>
      ";
    }
  }
  ?>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Anggota -->
    <?php
    $sql = "SELECT * FROM anggota"; //Mengambil data dari database.
    $anggota = mysqli_query($conn, $sql); //Querry data untuk mengambil data
    $jumlahAnggota = mysqli_num_rows($anggota); //Menghitung jumlah row data pada database
    ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="anggota.php">Anggota</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahAnggota ?> </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kriteria -->
    <?php
    $sql = "SELECT * FROM kriteria";
    $kriteria = mysqli_query($conn, $sql);
    $jumlahKriteria = mysqli_num_rows($kriteria);
    ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="kriteria.php">Kriteria</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahKriteria ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-tasks fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kriteria -->
    <?php
    $sql = "SELECT * FROM nilai";
    $kriteria = mysqli_query($conn, $sql);
    $jumlahNilai = mysqli_num_rows($kriteria);
    ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="nilai.php">Nilai</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahNilai ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Hasil -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="hasil.php">Hasil</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahNilai ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-poll fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="card">
      <div class="col-lg">
        <div class="card-header bg-info text-white mt-4">
          Sistem Pendukung Keputusan Metode Smart
        </div>
        <div class="card-body alert alert-success mt-2 mb-4">
          SMART (Simple Multi Attribute Rating Technique) merupakan metode pengambilan keputusan yang multi-atribut. Setiap pembuat keputusan harus memilih sebuah alternatif yang sesuai dengan tujuan yang telah dirumuskan. Setiap alternatif terdiri dari sekumpulan atribut dan setiap atribut mempunyai nilai-nilai.
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include 'templates/footer.php';
?>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar ?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Silahkan tekan logout sekarang!</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="#">Logout</a>
      </div>
    </div>
  </div>
</div>

<?php
include 'templates/foot.php';
?>
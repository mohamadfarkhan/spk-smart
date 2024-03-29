<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REGISTER ACCOUNT</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">BUAT AKUN BARU</h1>
                                    </div>
                                    <?php
                                    if (isset($_GET['message'])) {
                                        if ($_GET['message'] == "success") {
                                            echo "
                                                <div class='alert alert-success'>
                                                Akun berhasil dibuat, silahkan login!
                                                </div>
                                            ";
                                        } else if ($_GET['message'] == "failed") {
                                            echo "
                                                <div class='alert alert-danger'>
                                                Akun gagal dibuat, silahkan coba lagi!
                                                </div>
                                            ";
                                        }
                                    }
                                    ?>
                                    <form action="aksi/buatAkun.php" method="POST">
                                        <div class="form-group">
                                            <input required class="form-control" placeholder="Masukkan Username..." name="username" type="text" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input required class="form-control" placeholder="Masukkan Nama Lengkap..." name="nama" type="text" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input required class="form-control" placeholder="Masukkan Password..." name="password" type="password" value="">
                                        </div>
                                        <div class="form-group">
                                            <a class="small" href="login.php">Sudah punya akun! Login</a>
                                        </div>
                                        <button type="submit" name="register" class="btn btn-lg btn-success btn-user btn-block">BUAT AKUN</button>
                                        <hr>
                                        <div class="copyright text-center my-auto">
                                            <span>Copyright &copy; Mohamad Farkhan 2022</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
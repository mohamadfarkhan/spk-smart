<?php
session_start();
include 'koneksi.php';

if (isset($_GET['id'])) {
  if ($_GET['id'] == 'false') {
    echo "<script type ='text/JavaScript'>alert('username / password salah. Gagal masuk.')</script>";
    header("location:login.php");
  } else if ($_GET['id'] == 'out') {
    echo "<script type ='text/JavaScript'>alert('Anda belum masuk, silahkan maasuk.')</script>";
    header("location:login.php");
  } else {
    echo "<script type ='text/JavaScript'>alert('Logout berhasil.')</script>";
    header("location:login.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LOGIN SPK</title>

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
                    <h1 class="h4 text-gray-900 mb-4">LOGIN SPK</h1>
                    <img src="img/gambar.jpg" alt="logo_bismania" class="img-thumbnail mb-4">
                  </div>
                  <form role="form" action="" method="POST">
                    <fieldset>
                      <div class="form-group">
                        <input required class="form-control" placeholder="Username" name="username" type="text" autofocus>
                      </div>
                      <div class="form-group">
                        <input required class="form-control" placeholder="Password" name="password" type="password" value="">
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">Remember Me</label>
                        </div>
                      </div>
                      <input type="submit" name="login" class="btn btn-lg btn-primary btn-user btn-block" value="LOGIN">
                      <hr>
                      <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mohamad Farkhan 2022</span>
                      </div>
                    </fieldset>
                  </form>
                  <?php
                  if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);

                    $sqllogin = "SELECT * FROM user WHERE username='$username' AND password='$password'";
                    $querylogin = mysqli_query($conn, $sqllogin);

                    if (mysqli_num_rows($querylogin) > 0) {
                      $_SESSION['username'] = $username;
                      $_SESSION['stat'] = 'masuk';
                      echo "<script type ='text/JavaScript'>alert('berhasil masuk selamat datang $username ')</script>";
                      echo ($_SESSION['stat']);
                      header("location:index.php");
                    } else {
                      echo "<script type ='text/JavaScript'>alert('username/password salah')</script>";
                    }
                  }
                  ?>
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
 <?php
  session_start();
  require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIACA - Detail Data Mahasiswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php
    if (!isset($_SESSION["username"])) {
      echo "<script>alert('Anda Harus Login Terlebih Dahulu!!'); window.location.href='index.php'</script>";
      exit;
    }
  ?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="about.php" class="nav-link">About</a>
      </li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php" class="brand-link">
      <img src="assets/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><center><b>SIACA</b></center></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/swp.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Website</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Menu</li>
           <li class="nav-item">
            <a href="mahasiswa.php" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                CRUD Data Mahasiswa
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="akademik.php" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Akademik
              </p>
            </a>
          </li>
          <!--<li class="nav-item">
            <a href="matkul.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                CRUD Mata Kuliah
              </p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="tampil.php" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tampil Data Mahasiswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tampil_akademik.php" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tampil Data Akademik
              </p>
            </a>
          </li>
          <li class="nav-header">Access</li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="mahasiswa.php">Data Mahasiswa</a></li>
              <li class="breadcrumb-item active">Detail Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-12">
          <div class="panel panel-default">
          <div class="panel-body">
          <?php
              $nim = $_GET['nim'];
              $statement = new Cassandra\SimpleStatement("SELECT * FROM mahasiswa WHERE nim='$nim'");
              $result = $session->execute($statement);
              foreach ($result as $row){
          ?>
            <p><i>Note: Dibawah ini adalah detail informasi mahasiswa berdasarkan NIM : </i> <b><?php echo $nim ?></b></p>
            <table border="0" cellpadding="4">
              <!--<tr>
                  <td size="90">NIM Mahasiswa</td>
                  <td>: <?php echo $row['nim']?></td>
              </tr>-->
              <tr>
                  <td>Nama Mahasiswa</td>
                  <td>: <?php echo $row['nama']?></td>
              </tr>
              <tr>
                  <td>Tempat, Tanggal Lahir</td>
                  <td>: <?php echo $row['tempat_lahir']?>, <?php echo $row['tanggal_lahir'] ->toDateTime()->format("d-m-Y") ?></td>
              </tr>
              <tr>
                  <td>Jenis Kelamin</td>
                  <td>: <?php echo $row['jenis_kelamin']?></td>
              </tr>
              <tr>
                  <td>Alamat</td>
                  <td>: <?php echo $row['alamat']?></td>
              </tr>
              <tr>
                  <td>Nomor Telepon</td>
                  <td>: <?php echo $row['no_telepon']?></td>
              </tr>
          </table>
          <br>
          <p><i>Note: Detail informasi akademik mahasiswa berdasarkan NIM : </i> <b><?php echo $nim ?></b></p>
            <table border="0" cellpadding="4">
              <tr>
                  <td>Kelas</td>
                  <td>: <?php echo $row['kelas']?></td>
              </tr>
              <tr>
                  <td>Semester</td>
                  <td>: <?php echo $row['semester']?></td>
              </tr>
              <tr>
                  <td>Status Semester</td>
                  <td>: <?php echo $row['sts_smt']?></td>
              </tr>
              <tr>
                  <td>Dosen Pembimbing Akademik</td>
                  <td>: <?php echo $row['dos_akdmk']?></td>
              </tr>
              <tr>
                  <td>Jumlah SKS Total</td>
                  <td>: <?php echo $row['sks_total']?></td>
              </tr>
              <tr>
                  <td>SKS Terambil Sekarang</td>
                  <td>: <?php echo $row['sks_now']?></td>
              </tr>
               <tr>
                  <td>Status Mahasiswa Saat Ini</td>
                  <td>: <?php echo $row['sts_now']?></td>
              </tr>
              <tr>
                  <td>Nilai IPK</td>
                  <td>: <?php echo $row['nilai_ipk']?></td>
              </tr>
          </table>
          </br>
                <a href="mahasiswa.php" class="btn btn-primary btn-reset">Kembali ke Data Mahasiswa</a>
          </div>
          <?php
          }
          ?>
        </div>
        </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://satyawirapermana.kelompok3.site">Satya Wira Permana</a>.</strong>
    Aplikasi Web untuk UAS Teori dan Praktikum Sistem Basis Data.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versi</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

<?php
  session_start();
  require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIACA - Data Akademik Mahasiswa</title>

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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
            <a href="admin.php" class="nav-link">
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
            <a href="tampil_akademik.php" class="nav-link active">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Akademik Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Akademik Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!--<div class="card-header">
                <a class="btn btn-primary" href="tambah_data_mahasiswa.php">
                  <i class="fa fa-plus"></i>  <b>Tambah Data</b>
                </a>
              </div>-->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <!--<th><center>No.</center></th>-->
                      <th><center>NIM</center></th> 
                      <th><center>Nama</center></th>
                      <!--<th><center>Jenis Kelamin</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>No. Telepon</center></th>
                      <th><center>Tanggal Lahir</center></th>
                      <th><center>Tempat Lahir</center></th>-->
                      <th><center>Kelas</center></th>
                      <th><center>Semester</center></th>
                      <th><center>Status Semester</center></th>
                      <th><center>Dosen Pembimbing Akademik</center></th>
                      <th><center>Jumlah SKS Total</center></th>
                      <th><center>SKS Terambil Sekarang</center></th>
                      <th><center>Status Semester Saat Ini</center></th>
                      <th><center>IPK</center></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  // Tampilkan semua data
                    $statement = new Cassandra\SimpleStatement("SELECT * FROM mahasiswa");
                    $result = $session->execute($statement);
                    //$no = 1; // nomor urut
                    foreach ($result as $row){
                    ?>
                    <tr>
                      <!--<td><center><?= $no++; ?>.</center></td>-->
                      <td><center><a class = "btn-dark btn-sm" href="detail.php?nim=<?php echo $row['nim']; ?>"><?= $row['nim'] ?></a></center></td>
                      <td><?= $row['nama'] ?></td>
                      <!--<td><?= $row['jenis_kelamin'] ?></td>
                      <td><?= $row['alamat'] ?></td>
                      <td><?= $row['no_telepon'] ?></td>
                      <td><?= $row['tanggal_lahir'] ->toDateTime()->format("d-m-Y") ?></td>
                      <td><?= $row['tempat_lahir'] ?></td>-->
                      <td><?= $row['kelas'] ?></td>
                      <td><?= $row['semester'] ?></td>
                      <td><?= $row['sts_smt'] ?></td>
                      <td><?= $row['dos_akdmk'] ?></td>
                      <td><?= $row['sks_total'] ?> SKS</td>
                      <td><?= $row['sks_now'] ?> SKS</td>
                      <td><?= $row['sts_now'] ?> </td>
                      <td><?= $row['nilai_ipk'] ?></td>
                    </tr>
                    <?php
                    }
                  ?> 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Versi</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="https://satyawirapermana.kelompok3.site">Satya Wira Permana</a>.</strong> Aplikasi Web untuk UAS Teori dan Praktikum Sistem Basis Data
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

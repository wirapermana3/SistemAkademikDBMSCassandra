<?php
session_start();
  require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIACA - Tambah Data Mahasiswa dan Akademik</title>

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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Bootstrap -->
  
  <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
        // else return false
        return false;
    }
    </script>
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
            <h1 class="m-0">Tambah Data Mahasiswa dan Akademik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="mahasiswa.php">Data Mahasiswa</a></li>
              <li class="breadcrumb-item"><a href="akademik.php">Data Akademik Mahasiswa</a></li>
              <li class="breadcrumb-item active">Tambah Data Mahasiswa dan Akademik</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <form class="form-horizontal" method="POST" action="proses_simpan.php">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">NIM</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nim" maxlength="10" autocomplete="off" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Mahasiswa</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama" autocomplete="off" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Date of Birth</span>
                        </div>
                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" required>
                        <span class="input-group-addon">
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                      <label class="radio-inline">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                      </label>
                      &nbsp;
                      <label class="radio-inline">
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                      </label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kelas</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="kelas" placeholder="Pilih Kelas" required>
                        <option disabled selected>--Pilih Salah Satu--</option>
                        <option value="IF-A">IF-A</option>
                        <option value="IF-B">IF-B</option>
                        <!--<option value="IF-C">IF-C</option>
                        <option value="IF-D">IF-D</option>
                        <option value="IF-E">IF-E</option>-->
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="alamat" rows="3" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">No. Telepon</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="no_telepon" autocomplete="off" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Semester</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="semester" placeholder="Pilih Semester" required>
                        <option disabled selected>--Pilih Salah Satu--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-2 control-label">Status Semester</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="sts_smt" placeholder="Pilih Semester">
                      <option disabled selected>--Pilih Salah Satu--</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Dosen Pembimbing Akademik</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="dos_akdmk" autocomplete="off" required>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah SKS Total</label>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" max="200" name="sks_total" autocomplete="off" required>
                  </div>
                </div>
                

                <div class="form-group">
                  <label class="col-sm-2 control-label">SKS Terambil Sekarang</label>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" max="24" name="sks_now" autocomplete="off" required>
                  </div>
                </div>  

                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Mahasiswa Saat Ini</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="sts_now" placeholder="Pilih Status">
                      <option disabled selected>--Pilih Salah Satu--</option>
                      <option value="Belum Lulus">Belum Lulus</option>
                      <option value="Lulus">Lulus</option>
                      <option value="Cuti Semester">Cuti Semester</option>
                      <option value="Drop Out">Drop Out</option>
                    </select>
                  </div>
                </div>

                   <div class="form-group">
                    <label class="col-sm-2 control-label">Nilai IPK</label>
                    <div class="col-sm-6">
                      <input type="number" placeholder="0.00" step="0.01" min="0.00" max="4.00" class="form-control" name="nilai_ipk" autocomplete="off" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                      <a href="mahasiswa.php" class="btn btn-secondary btn-reset">Batal</a>
                    </div>
                  </div>
                </form>
              </div> <!-- /.panel-body -->
            </div> <!-- /.panel -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
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
<script src="assets/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
      $(function () {

        //datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // toolip
        $('[data-toggle="tooltip"]').tooltip();
      })
    </script>
</body>
</html>

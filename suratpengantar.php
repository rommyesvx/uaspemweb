<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Akademik</title>

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
  <link rel="stylesheet" href="styles/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<?php
session_start();
$id = $_SESSION['id'];
require('action/koneksi.php');
$query = mysqli_query($koneksi, "SELECT matakuliah.NamaMataKuliah, ips.Semester, ips.IPS, matakuliah.SKS FROM ips
JOIN matakuliah ON matakuliah.IdMatakuliah = ips.IdMatakuliah WHERE ips.IdMahasiswa = $id");
  ?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include "sidebarmhs.php" ?>
    <!-- Preloader
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
          <!-- Main row -->
          <h3>Pengajuan Surat Pengantar</h3>
    			<div class="form-group">
    				<div class="form-row">
    					<div class="col mt-3" style="margin-left: 100px; margin-right: 100px;">
    						<div class="row border-dark border w-100" onclick="location.href='formpkl.php'" style="border-width: 1px !important; border-radius: 20px; padding-bottom: 20px;">
    							<div class="col-sm-8 pl-3 mt-3 mb-3">
    								<p class="font-weight-bold" id="tes">
    									Praktek Kerja Lapangan <br><small class="font-weight-light">Klik untuk melanjutkan ke form pengajuan</small>
    									<a href="#" class="stretched-link"></a>
    								</p>
    							</div>
    							<div class="col-sm-4 text-right">
    								<img src="images/yourself.png" style="width: 50%;">
    							</div>
    						</div>
    						<div class="row border-dark border mr-3 mt-4 w-100" onclick="location.href = 'formskripsi.php'" style="border-width: 1px !important; border-radius: 20px; padding-bottom: 20px;">
    							<div class="col-sm-8 pl-3 mt-3 mb-3">
    								<p class="font-weight-bold">
    									Penelitian Skripsi<br><small class="font-weight-light">Klik untuk melanjutkan ke form pengajuan</small>
    									<a href="#" class="stretched-link"></a>
    								</p>
    							</div>
    							<div class="col-sm-4 text-right">
    								<img src="images/someone.png" style="width: 50%;">
    							</div>
    						</div>
    						<div class="row border-dark border mr-3 mt-4 w-100" onclick="location.href = 'formpenelitanmatkul.php'" style="border-width: 1px !important; border-radius: 20px; padding-bottom: 20px;">
    							<div class="col-sm-8 pl-3 mt-3 mb-3">
    								<p class="font-weight-bold">
    									Penelitian Mata Kuliah<br><small class="font-weight-light">Klik untuk melanjutkan ke form pengajuan</small>
    									<a href="#" class="stretched-link"></a>
    								</p>
    							</div>
    							<div class="col-sm-4 text-right">
    								<img src="images/char.png" style="width: 50%;">
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			</div>
          <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="">R&A</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>www.upnjatim.ac.id</b>
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

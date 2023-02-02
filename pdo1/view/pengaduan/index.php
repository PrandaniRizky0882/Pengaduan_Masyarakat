<?php
include '../../PengaduanController.php';
$index = $pengaduan->index();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengaduan | Masyarakat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="register.php" class="nav-link">Register</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MudaMudi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nama Pengguna</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Register
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Tulis Catatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <i class="nav-icon fas fa-clone"></i>
              <p>
                Laporan Pengaduan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Keluar
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
            <h1>Pengaduan Pengaduan</h1>
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
              <div class="card-header">
                <h3 class="card-title">Desa Mekar Sari</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <a href="../pengaduan/create.php" class="btn btn-success">Tambah Pengaduan</a><br></br>
                  <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Nik</td>
                    <th>Laporan Pengaduan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
              <?php if ($index != null) : ?>
                <?php foreach ($index as $i) : ?>
                  <tr>
                    <td><?= $i->tgl_pengaduan ?></td>
                    <td><?= $i->nik ?></td>
                    <td><?= $i->isi_laporan ?></td>
                    <td><?= $i->foto ?></td>
                    <?php if ($i->status == 0) : ?>
                <td>Belum diproses</td>
            <?php elseif ($i->status == 'proses') : ?>
                <td>Sedang diproses</td>
            <?php elseif ($i->status == 'selesai') : ?>
                <td>Selsai diproses</td>
            <?php endif ; ?>
                    <td><a href="../pengaduan/edit.php" class="btn btn-success">Edit</a> | <a href="../../PengaduanController.php" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <?php endforeach; ?>
            <?php else : ?>
                <h3>List Pengaduan Masih Kosong</h3>
            <?php endif; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Tanggal Pengaduan</th>
                    <th>Nik</th>
                    <th>Laporan Pengaduan</th>
                    <th>Foto</th>
                    <th>status</th>
                    <th>More</th>
                  </tr>
                  </tfoot>
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
      <b>UKK RPL B 2021</b> Aplikasi Peduli Diri
    </div>
    <strong>Copyright &copy : <?php echo date("Y") ?> <a href="#">IDZKY</a>.</strong> Alo
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
</head>
</html>
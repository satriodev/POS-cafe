<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INVENTORY SYSTEM IKHI KATSU</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/yearpicker/dist/yearpicker.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- SEARCH FORM -->


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url() ?>Home/logout">
            <i class="fas fa-sign-out-alt"></i>

          </a>

        </li>


      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>assets/dist/img/sim.png" alt="AdminLTE Logo" class="brand-image img-square elevation-3 ml-auto" style="opacity: .8">

        <span class="brand-text font-weight-light">IKHI KATSU SYSTEM</span>

      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">


        </div>

        <!-- SidebarSearch Form -->




        <?php
        $akses=$this->session->userdata('akses');


?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="<?= base_url() ?>Home/Dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Dashboard

                </p>
              </a>
            </li>
            <?php if ($akses == 'admin' || $this->session->userdata('akses') == 'superadmin' ) { ?>
              <li class="nav-header">Bahan Baku</li>
              <li class="nav-item">
                <a href="<?= base_url() ?>Manajemenbahanbaku" class="nav-link">
                  <i class="nav-icon fas fa-boxes"></i>

                  <p>
                    
                    Manajemen Bahan Baku

                  </p>
                </a>
              </li>
            <?php }?>

            <?php if ($this->session->userdata('akses') == 'admin' || $this->session->userdata('akses') == 'superadmin') : ?>
              <li class="nav-item">
                <a href="<? //= base_url() 
                          ?>Resetqrcode" class="nav-link">
                  <i class="nav-icon fas fa-truck-loading"></i>

                  <p>
                    Mutasi Bahan Baku masuk

                  </p>
                </a>
              </li>
            <?php endif; ?>


           
              <li class="nav-header">Menu</li>
              <?php if ($this->session->userdata('akses') == 'admin' || $this->session->userdata('akses') == 'superadmin') : ?>
              <li class="nav-item">
                <a href="<?= base_url() ?>Manajemendatamenu" class="nav-link">
                  <i class="nav-icon fab fa-wpforms"></i>
                  <p>
                    Manajemen Data Menu

                  </p>
                </a>
              </li>
            <?php endif; ?>


            <?php if ($this->session->userdata('akses') == 'admin' || $this->session->userdata('akses') == 'superadmin' ) : ?>
              <li class="nav-item">
                <a href="<?= base_url() ?>Inputkomposisi" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>

                  <p>
                    Input Komposisi Menu

                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?= base_url() ?>Viewkomposisi" class="nav-link">
                  <i class="nav-icon fas fa-file-signature"></i>

                  <p>
                    Data Komposisi Per-Menu

                  </p>
                </a>
              </li>

              <?php endif; ?>


              <?php if ($this->session->userdata('akses') == 'superadmin') : ?>
              <li class="nav-item">
                <a href="<?= base_url() ?>Manajemenbiaya" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>

                  <p>
                    Input Biaya
                  </p>
                </a>
              </li>
              <?php endif; ?>





            <?php if ($this->session->userdata('akses') == 'admin' || $this->session->userdata('akses') == 'superadmin') { ?>
              <li class="nav-header">Transaksi</li>
              <li class="nav-item">
                <a href="<?= base_url() ?>Penjualan" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>

                  <p>
                    Penjualan

                  </p>
                </a>
              </li>




              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>

                  <p>
                  Laporan Per Transaksi

                  </p>
                </a>
              </li>




              <li class="nav-item">
                <a href="<?=base_url()?>Laporanperiodik" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>

                  <p>
                  Laporan Penjualan Periodik

                  </p>
                </a>
              </li>



              
            <?php } ?>

            <?php if ($this->session->userdata('akses') == 'admin') : ?>
              <li class="nav-item">
                <a href="<?= base_url() ?>#" class="nav-link">
                  <i class="nav-icon fas fa-recycle"></i>
                  <p>
                    Retur Transaksi

                  </p>
                </a>
              </li>
            <?php endif; ?>




            <?php if ($this->session->userdata('akses') == 'admin' or 'timleader') : ?>
              <!-- <li class="nav-header">Absensi</li>
              <li class="nav-item">
                <a href="<?= base_url() ?>Manajemenabsensi" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Absensi
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>
            <?php endif; ?>

            <?php if ($this->session->userdata('akses') == 'admin') : ?>

              <li class="nav-item">
                <a href="<?= base_url() ?>Updatejadwal" class="nav-link">
                  <i class="nav-icon fas fa-clock"></i>
                  <p>
                    Update Jadwal
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>
            <?php endif; ?>



            <?php if ($this->session->userdata('akses') == 'admin' or 'timleader') : ?>

              <li class="nav-item">
                <a href="<?= base_url() ?>Manajemenijin" class="nav-link">
                  <i class="nav-icon fas fa-user-tag"></i>
                  <p>
                    Manajemen Ijin
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>
            <?php endif; ?>

            <?php if ($this->session->userdata('akses') == 'admin' or 'timleader') : ?>
              <li class="nav-header">Laporan</li>

              <li class="nav-item">
                <a href="<?= base_url() ?>Laporan" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Laporan Harian
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url() ?>Laporan/Laporanbulanan" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Laporan Bulanan
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
              </li>

            <?php endif; ?>



          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
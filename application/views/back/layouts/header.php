<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= TITLE_BAR ?></title>

    <link rel="shortcut icon" href="<?= base_url('favicon.png') ?>" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
   <link href="<?= base_url('asset/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon">
               <!-- <i class="fas fa-tachometer-alt"></i> -->
               <img src="<?= base_url('favicon.png') ?>" alt="<?= base_url('favicon.png') ?>" width="40">
            </div>
            <div class="sidebar-brand-text mx-3">ADMIN KNPI</div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/view/organisasi') ?>">
               <i class="fas fa-fw fa-map"></i>
               <span>P. Kecamatan & OKP</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">Manajemen</div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/view/pengurus') ?>">
               <i class="fas fa-fw fa-sitemap"></i>
               <span>Pengurus Utama</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/view/pengurus') ?>">
               <i class="fas fa-fw fa-sitemap"></i>
               <span>Manejemen Pengurus</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/view/berita') ?>">
               <i class="fas fa-fw fa-newspaper"></i>
               <span>Manejemen Berita</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/view/galeri') ?>">
               <i class="fas fa-fw fa-file-image"></i>
               <span>Manejemen Galeri</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/view/kata') ?>">
               <i class="fas fa-fw fa-comments"></i>
               <span>Manejemen Kata Bijak</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/view/kontak') ?>">
               <i class="fas fa-fw fa-envelope"></i>
               <span>Manejemen Kontak</span>
            </a>
         </li>         

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">
                  <div class="topbar-divider d-none d-sm-block"></div>
                  
                  <!-- Nav Item - setting user -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="<?php echo site_url('admin/view/home') ?>">
                        <i class="fas fa-tachometer-alt fa-fw"></i> &nbsp; Dashboard
                     </a>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - setting user -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="<?php echo site_url('welcome/view/beranda') ?>" target="_blank">
                        <i class="fas fa-paper-plane fa-fw"></i> &nbsp; Ke Website
                     </a>
                  </li>
                 
                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - setting user -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="<?php echo site_url('admin/view/informasi') ?>">
                        <i class="fas fa-exclamation-triangle fa-fw"></i> &nbsp; Informasi KNPI
                     </a>
                  </li>
                  
                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - setting user -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="<?= site_url('admin/view/profil') ?>">
                     <i class="fas fa-user fa-fw"></i> &nbsp; <?php echo $this->session->userdata('namausr') ?>
                     </a>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>
                  
                  <!-- Nav Item - sign-out -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-sign-out-alt fa-fw"></i> &nbsp; Keluar
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- End of Topbar -->
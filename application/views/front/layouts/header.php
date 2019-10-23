<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= TITLE_BAR ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?= base_url('favicon.png') ?>" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url('asset/front/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url('asset/front/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset/front/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset/front/lib/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset/front/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset/front/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url('asset/front/css/style.css') ?>" rel="stylesheet">
    <?php
        $class      = $this->uri->segment(1);
        $function   = $this->uri->segment(2);
        $param      = $this->uri->segment(3);
        
        if ($class != 'welcome' || $function != 'view' || $param != 'beranda'){
            echo "<style>body{ padding-top: 60px; }</style>";
        }
    ?>
    
</head>

<body>
    <!--==========================
    Header
    ============================-->
    <header id="header" class="fixed-top">
        <div class="container">
            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light">
                    <a href="" class="scrollto"><img src="<?= base_url('asset/front/img/logo_knpi.png') ?>" alt="" class="img-fluid"></a>
                    <a href=""><span>KNPI</span></a>
                </h1>
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li><a href="<?= site_url('welcome/view/beranda') ?>">Beranda</a></li>
                    <li class="drop-down"><a href="">Profil</a>
                        <ul>
                            <li><a href="<?= site_url('welcome/view/susunan') ?>">Susunan Pengurus</a></li>
                            <li><a href="<?= site_url('welcome/view/sejarah') ?>">Sejarah KNPI</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">P. Kecamatan</a>
                        <ul>
                            <?php foreach($pk as $org): ?>
                            <li><a href="<?= site_url('welcome/view/organisasi/'.$org->idorg) ?>"><?= $org->namaorg ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('welcome/view/okp') ?>">OKP</a></li>
                    <li><a href="<?= site_url('welcome/view/galeri') ?>">Galeri</a></li>
                    <li><a href="<?= site_url('welcome/view/berita') ?>">Berita</a></li>
                    <li><a href="<?= site_url('welcome/view/kontak') ?>">Kontak</a></li>
                </ul>
            </nav><!-- .main-nav -->
        </div>
    </header><!-- #header -->
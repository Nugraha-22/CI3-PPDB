
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title><?= $title; ?></title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/images/Logo_KSB.jpg" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/themefisher-font/style.css">

  <!-- Boostrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/bootstrap/css/bootstrap.min.css">

  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css"> 
  <!-- Datatables -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/datatables/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/datatables/fixedColumns.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/datatables/buttons.bootstrap4.min.css">
  
</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="<?= base_url() ?>/assets/index.html">
        <h3 class="logo-default">KASIH SAYANG BUNDA</h3>
        <h3 class="logo-white text-white">KASIH SAYANG BUNDA</h3>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url('User/Member') ?>">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pendaftaran
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url('User/Les') ?>">Les</a>
              <a class="dropdown-item" href="<?= base_url('User/TK') ?>">TK</a>
              <a class="dropdown-item" href="<?= base_url('User/TPQ') ?>">TPQ</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url('Sistem-Informasi/Auth/Logout') ?>">Log-Out</a>
          </li>

        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->

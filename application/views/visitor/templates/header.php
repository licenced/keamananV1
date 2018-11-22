<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.cssx">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/full-slider.css"> 
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/artikel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/tools.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js">
    </script>
    <meta charset="utf-5">
    <title>SecureOne</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('home'); ?>">
          <img src="<?php echo base_url().'assets/images/logo.png'?>" width = "20"> SecureOne</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('home'); ?>">
              <img src="<?php echo base_url().'assets/icon/home.png'?>" width = "20"> Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('home/index_artikel'); ?>">
              <img src="<?php echo base_url().'assets/icon/article.png'?>" width = "20"> Article</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('home/index_tools'); ?>">
              <img src="<?php echo base_url().'assets/icon/tools.png'?>" width = "20"> Tools</a>
            </li><li class="nav-item active">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('pemesanan'); ?>">
              <img src="<?php echo base_url().'assets/icon/pemesanan.png'?>" width = "20"> Pemesanan</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php echo base_url();?>/assets/images/headerweb.png')">
            <div class="carousel-caption d-none d-md-block">
              <h1><!-- Welcome To Our Website --></h1>
            </div>
          </div>
        </div>
      </div>
    </header>

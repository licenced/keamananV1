<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">PABW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?php echo base_url();?>post">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php echo base_url();?>post/new_post">Create Content</a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item nav-link" href="<?php echo base_url().'/logout'?>">Logout</a>
        </div>
        </div>
      </div>
  </nav> <br><br><br>

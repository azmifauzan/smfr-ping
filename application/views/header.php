<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>SMFR Ping Status</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/smfr.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">SMFR Ping Status</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($menu == "Beranda") echo 'class="active"' ?>><a href="<?php echo base_url(); ?>">Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <?php if($this->session->userdata('isLoginAdmin') == TRUE) : ?>
              <li <?php if($title == 'Kota') echo 'class="active"'; ?>><a href="<?php echo site_url('kota'); ?>"><span>Kota</span></a></li>
        <li <?php if($title == 'Perangkat') echo 'class="active"'; ?>><a href="<?php echo site_url('perangkat'); ?>"><span>Perangkat</span></a></li>
              <?php endif; ?>
            <li><?php if($this->session->userdata('isLoginAdmin') == TRUE) echo anchor('auth/logout','Logout'); else echo anchor('auth/login','Login'); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
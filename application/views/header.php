<!DOCTYPE html>
<html>
  <head>
    <?php if($title == "Dashboard") {echo $map['js']; echo '<meta http-equiv="refresh" content="300">';} ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMFR</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/dist/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/dist/css/skins/_all-skins.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">
		<div class="container">
        <div class="navbar-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SMFR</b> Ping Status</span>
        </a>
		</div>
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li <?php if($title == 'Dashboard') echo 'class="active"'; ?>><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li <?php if($title == 'Kota') echo 'class="active"'; ?>><a href="<?php echo site_url('kota'); ?>"><i class="fa fa-road"></i> <span>Kota</span></a></li>
				<li <?php if($title == 'Perangkat') echo 'class="active"'; ?>><a href="<?php echo site_url('perangkat'); ?>"><i class="fa fa-laptop"></i> <span>Perangkat</span></a></li>
              </ul>
            </li>
          </ul>
          
        </div>
		</div>

        <!-- Header Navbar -->
        
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      
	  

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 align="center">
    <?php echo $title; ?>
  </h1>
</section>

<!-- Main content -->
<section class="content">
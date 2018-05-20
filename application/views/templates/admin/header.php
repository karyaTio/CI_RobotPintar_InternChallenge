<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robot Pintar</title>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/materialize.min.css'?>"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php echo base_url() . 'dashboard/product'; ?>">Robot</a></li>
  <li><a href="<?php echo base_url() . 'dashboard/brand'; ?>">Brand</a></li>
</ul>
<!-- ================= NAVBAR ================== -->
<nav>
  <div class="nav-wrapper">
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a class="navbar-item" href="<?php echo base_url(). 'dashboard/home' ?>">Home</a></li>
      <li><a class="navbar-item" href="<?php echo base_url(); ?>dashboard/overview">Overview</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Product<i class="material-icons right">arrow_drop_down</i></a></li>

      <li><a class="navbar-item" href="<?php echo base_url(); ?>dashboard/data">Data</a></li>
      <li><a class="navbar-item" href="<?php echo base_url(); ?>dashboard/user">User</a></li>

      <!-- IF THE USER NOT LOGGED IN -->
      <?php if(!$this->session->userdata('logged_in')): ?>
        <li><a class="waves-effect waves-light btn" href="<?php echo base_url() . 'admin/register'?>">REGISTER</a></li>
        <li><a class="waves-effect waves-light btn" href="<?php echo base_url() . 'admin/login'?>">LOGIN</a></li>
      <?php endif; ?>

      <!-- IF THE USER LOGGED IN -->
      <?php if($this->session->userdata('logged_in')): ?>
        <li><a class="waves-effect waves-light btn" href="<?php echo base_url() . 'admin/logout'?>">LOGOUT</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

<!-- ================= NOTIFICATION ================== -->
<div class="container">
<?php if($this->session->flashdata('admin_registered')): ?>
<div class="row">
  <div class="col s12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Notification</span>
        <p><?php echo $this->session->flashdata('admin_registered'); ?></p>
        </div>
        <div class="card-action">
          <a href="#">OK </a>
        </div>
      </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('robot_created')): ?>
<div class="row">
  <div class="col s12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Notification</span>
        <p><?php echo $this->session->flashdata('robot_created'); ?></p>
        </div>
        <div class="card-action">
          <a href="#">OK </a>
        </div>
      </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('robot_updated')): ?>
<div class="row">
  <div class="col s12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Notification</span>
        <p><?php echo $this->session->flashdata('robot_updated'); ?></p>
        </div>
        <div class="card-action">
          <a href="#">OK </a>
        </div>
      </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('robot_deleted')): ?>
<div class="row">
  <div class="col s12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Notification</span>
        <p><?php echo $this->session->flashdata('robot_deleted'); ?></p>
        </div>
        <div class="card-action">
          <a href="#">OK </a>
        </div>
      </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('admin_login_failed')): ?>
<div class="row">
  <div class="col s12">
    <div class="card red darken-1">
      <div class="card-content white-text">
        <span class="card-title">Notification</span>
        <p><?php echo $this->session->flashdata('admin_login_failed'); ?></p>
        </div>
        <div class="card-action">
          <a href="#">OK </a>
        </div>
      </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('admin_login')): ?>
<div class="row">
  <div class="col s12">
    <div class="card green darken-1">
      <div class="card-content white-text">
        <span class="card-title">Notification</span>
        <p><?php echo $this->session->flashdata('admin_login'); ?></p>
        </div>
        <div class="card-action">
          <a href="#">OK </a>
        </div>
      </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('admin_logout')): ?>
<div class="row">
  <div class="col s12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Notification</span>
        <p><?php echo $this->session->flashdata('admin_logout'); ?></p>
        </div>
        <div class="card-action">
          <a href="#">OK </a>
        </div>
      </div>
  </div>
</div>
<?php endif; ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robot Pintar</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>

<nav class=" container navbar is-transparent">

  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
        <a class="navbar-item" href="<?php echo base_url(); ?>admin/overview">Overview</a>
        <a class="navbar-item" href="<?php echo base_url(); ?>robot/manage">Product</a>
        <a class="navbar-item" href="<?php echo base_url(); ?>admin/data">Data</a>
        <a class="navbar-item" href="<?php echo base_url(); ?>user/manage">User</a>
    </div>
    <div class="navbar-end">

      <div class="navbar-item">
        <div class="field is-grouped">
          <?php if(!$this->session->userdata('logged_in')): ?>
          <p class="control">
            <a href="<?php echo base_url();?>admin/register" class="button is-primary">
              <span>Register</span>
            </a>
          </p>
          
          <p class="control">
            <a href="<?php echo base_url();?>admin/login" class="button is-info">
              <span>Login</span>
            </a>
          </p>
          <?php endif; ?>

          <?php if($this->session->userdata('logged_in')): ?>
          <p class="control">
            <a href="<?php echo base_url();?>admin/logout" class="button is-danger">
              <span>Logout</span>
            </a>
          </p>
          <?php endif; ?>

        </div>
      </div>
    </div>

  </div>
</nav>

<!-- Flash Messages -->
<div class="container flash-messages">

  <?php if($this->session->flashdata('admin_registered')): ?>
    <?php echo'<p class="has-background-info has-text-white">'. $this->session->flashdata('admin_registered').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('robot_created')): ?>
    <?php echo'<p class="has-background-info has-text-white">'. $this->session->flashdata('robot_created').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('robot_updated')): ?>
    <?php echo'<p class="has-background-info has-text-white">'. $this->session->flashdata('robot_updated').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('robot_deleted')): ?>
    <?php echo'<p class="has-background-info has-text-white">'. $this->session->flashdata('robot_deleted').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('admin_login_failed')): ?>
    <?php echo'<p class="has-background-danger has-text-white">'. $this->session->flashdata('admin_login_failed').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('admin_login')): ?>
    <?php echo'<p class="has-background-primary has-text-white">'. $this->session->flashdata('admin_login').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('admin_logout')): ?>
    <?php echo'<p class="has-background-info has-text-white">'. $this->session->flashdata('admin_logout').'</p>'; ?>
  <?php endif; ?>
  
</div>


<?php
  include "conn.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>KitaPintar</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/"> -->

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .navbar-fixed-top {
        right: auto;
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body style="background-color:#e2ffe9">
    
<header class="navbar navbar-light sticky-top flex-md-nowrap p-10 shadow bg-success col">
  <a href="index.php" class="col-md-8 ms-3 my-1">
    <img src="images/logo.png">
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container-fluid">
  </div>
    <!--
  <div class="container-fluid">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 link-dark fw-bold col-auto" href="register.php">Daftar</a>
    </div>
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 link-dark fw-bold" href="login.php">Masuk</a>
    </div>
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 link-dark fw-bold" href="clear_session.php">Keluar</a>
    </div>
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 link-dark fw-bold" href="akun.php">Akun</a>
    </div>
  </div>
    -->
  <div class="container-fluid">
    <?php 
    if (isset($_SESSION['user_id'])) {
      echo '
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 link-dark fw-bold" href="clear_session.php">Keluar</a>
      </div>
      <div class="nav-item text-nowrap me-5">
        <a class="nav-link px-3 link-dark fw-bold" href="akun.php">Akun</a>
      </div>
      ';
    } else {
      echo '
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 link-dark fw-bold col-auto" href="register.php">Daftar</a>
      </div>
      <div class="nav-item text-nowrap me-5">
        <a class="nav-link px-3 link-dark fw-bold" href="login.php">Masuk</a>
      </div>
      ';
    }
    ?>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
  <?php
      include 'sidebar.php';
  ?>
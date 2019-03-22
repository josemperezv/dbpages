<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
  <title>Order - Step <?php if(!isset($_POST['step'])){ echo 1;} else { echo $_POST['step']; }?></title>
  <?php
    session_start();
    include_once('conn.php');
  ?>
</head>

<nav class="navbar fixed-top">
  <div class="container">
    <a class="navbar-brand" href="https://jnswriting.com/">JNS WRITING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(isset($_SESSION['jns_session'])) { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="menu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
        <div class="dropdown-menu" aria-labelledby="menu">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">My Orders</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    <?php } ?>
  </div>
</nav>

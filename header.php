<?php
require('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Fontawesome link -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <!-- CUstom css link -->
    <link rel="stylesheet" href="css/style.css">
    <title>CACTUS HOUSE</title>
  </head>
  <body>
    <!-- Header section -->
    <header>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-success ">
        <div class="container">
          <a class="navbar-brand text-white" href="index.php">CACTUS HOUSE</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ms-auto pe-3">
              <li class="nav-item">
                <a
                  class="nav-link text-white active"
                  aria-current="page"
                  href="index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="myorder.php">My Orders</a>
              </li>
              <?php if(isset($_SESSION['admin'])) {?>
              <li class="nav-item">
                <a class="nav-link text-white" href="allorder.php">All Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="addcactus.php">Add Cactus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="makeadmin.php">Make Admin</a>
              </li>
              <?php } ?>
              <?php if(isset($_SESSION['user_email'])) {?>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php"><?php echo $_SESSION['user_name'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">Logout</a>
              </li>
              <?php } else {?>
              <li class="nav-item">
                <a class="nav-link text-white" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="register.php">Register</a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>



  

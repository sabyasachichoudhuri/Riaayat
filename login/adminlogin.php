<?php
session_start();

$con= mysqli_connect('localhost', 'root');




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="../favicon/favicon.ico">
    <title>RIAAYAT</title>
    <?php include 'links.php' ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@800&family=Roboto:wght@900&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light navbar-expand-md navi-bar" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
          <a href="index.html">
    <img src="../img/logo.png" width="150" height="75" alt="logo"></a>
        </a>
      <!-- <a class="navbar-brand" href="#">Riaayat</a> -->
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse"
      id="navcol-1">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item" role="presentation"><a class="nav-link" href="../index.html">Home</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="../about.html">About Us</a></li>
        <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact Us</a></li> -->
        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Work with us</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  <header>
    <div class="container center-div shadow " >
      <div class="heading text-center mb-2 text-uppercase text-white"> LOGIN</div>
      <div class= "container row d-flex flex-row justify-content-center mb-2">
        <div class="admin-form shadow p-2">
          <form action="logincheck.php" method="POST">
            <div class="form-group">
            <label>EMAIL ID</label>
            <input type="text" name="user" value=""
            class ="form-control" autocomplete="off">
          </div>
          <div class="form-group">
          <label> PASSWORD </label>
          <input type="password" name="pass" value=""
          class ="form-control" autocomplete="off">
        </div>
        <input type="submit" class="btn btn-light" value="Submit" name="submit">
      </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

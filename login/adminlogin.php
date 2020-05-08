<?php
session_start();

$con= mysqli_connect('localhost', 'root');




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RIAAYAT</title>
    <?php include 'links.php' ?>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <header>
    <div class="container center-div shadow " >
      <div class="heading text-center mb-5 text-uppercase text-white"> RIAAYAT LOGIN PAGE</div>
      <div class= "container row d-flex flex-row justify-content-center mb-5">
        <div class="admin-form shadow p-2">
          <form action="logincheck.php" method="POST">
            <div class="form-group">
            <label> USERNAME /EMAIL ID</label>
            <input type="text" name="user" value=""
            class ="form-control" autocomplete="off">
          </div>
          <div class="form-group">
          <label> PASSWORD </label>
          <input type="text" name="pass" value=""
          class ="form-control" autocomplete="off">
        </div>
        <input type="submit" class="btn btn-success" value="Submit" name="submit">
      </form>
  </body>
</html>

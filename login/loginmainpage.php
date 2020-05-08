<?php
session_start();
if (!isset ($_SESSION['user'])){
header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RIAAYAT LOGIN</title>
    <?php include 'links.php' ?>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <div class="container center-div shadow">
    <div class "heading text-center text-uppercase text-white mb-5"> Login page content......
      Welcome <?php echo $_SESSION['user'] ?> </div>
      <a href="logout.php" class= "btn btn-danger"> LOG OUT </a>
  </div>
  </body>
</html>

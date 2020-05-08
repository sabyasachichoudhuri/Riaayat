<?php
session_start();
$con= mysqli_connect('localhost', 'root');
$db= mysqli_select_db($con, 'riyaayat');

if (isset($_POST['submit'])){
  $username= $_POST['user'];
  $password= $_POST['pass'];

  $sql =  "select * from login where user= '$username' and pass ='$password'";
  $query= mysqli_query($con, $sql);
  $row= mysqli_num_rows($query);
    if ($row == 1){
      echo "login sucessful";
      $_SESSION['user']= $username;
      header('location:loginmainpage.php');
    }
    else{
      echo "login failed";
      header('location:adminlogin.php');
    }
  }

 ?>

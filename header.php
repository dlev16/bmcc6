<?php
// header.php
// kbyron@bmcc.cuny.edu
// modified 4-23-2020
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <style>
    a{color:#aa00aaOB}
    body{background:#ee4; text-align:center} 
    h1{color:red; text-align:center; font-family:Verdana}
    h5{text-align:center}
    p{color:green; text-align:center}
    table{margin-left:auto; margin-right:auto; text-align:center}
  </style>
</head>
<body>
<?php 
session_start();
echo '<h5><font face="Arial">
  <a href="campsites.php">CAMPSITES</a>  |
  <a href="customers.php">CUSTOMERS</a>  |
  <a href="home.php">HOME</a>  |
  <a href="login.php">LOGIN</a> |
  <a href="logout.php">LOGOUT</a> |
  <a href="news.php">NEWS</a> |
  <a href="reg.php">REGISTER</a> |
  <a href="weather.php">WEATHER</a></h5>';
?>

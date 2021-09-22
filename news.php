<?php
// news.php
// kbyron@bmcc.cuny.edu
// rev 4-19-2020
?>
<html>
<head>
  <title>NEWS</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - NEWS</h1>
</head>
<body>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
$array = array("up", "down", "sharply up", "sharply down");
echo '<h3>The DOW is '.$array[rand(0,3)].'.</h3>';
echo '</body>';
echo '</html>';
?>

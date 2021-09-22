<?php
// weather.php
// kbyron@bmcc.cuny.edu
// rev 4-19-2020
//
?>
<html>
<head>
  <title>WEATHER</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - WEATHER</h1>
</head>
<body>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
$array = array("sunny", "rainy", "cold", "windy");
echo '<h3>The weather is '.$array[rand(0,3)].'.</h3>';
echo '</body>';
echo '</html>';
?>

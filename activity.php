<?php 
// activity.php
// kbyron@bmcc.cuny.edu
// 4-23-2020
// display customers' activity
?>
<html>
<head>
  <title>ACTIVITY</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - CUSTOMERS' ACTIVITY</h1>
</head>
<body>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
$dbc = mysqli_connect("localhost", "root", "", "bmcc6db");
if (!$dbc) {
  echo 'Connection error.  Please try again.';
}
else {
  $q = 'select * from activity';
  $r = mysqli_query($dbc,$q);
  if (!$r){
    echo 'Select statement error. Please try again.';
  }
  else {
   print "<table border=1>\n";
   $i=0;
   while ($line = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
     $i++;
     if($i == 1){ // show column headings
       echo "<tr><td></td>";
       foreach ($line as $key => $value) {
         echo "<td><b>$key</b></td>";
       }
       echo "</tr>";
     }
     echo "<tr><td>".$i."</td>";
     foreach ($line as $key => $value) {
       echo "<td>$value</td>";
     }
     echo "</tr>";
   }
   echo "</table>";
  }
}
?>


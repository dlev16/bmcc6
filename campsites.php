<?php 
// campsites.php
// kbyron@bmcc.cuny.edu
// 5-1-2020
// display campsites
?>
<html>
<head>
  <title>CAMPSITES</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - CAMPSITES</h1>
</head>
<body>
<p>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
require 'connectdb.php';
if (!$dbc) {
  echo 'Database error ... please try again.';
}
else {
  $q = 'select * from campsite';
  $r = mysqli_query($dbc,$q);
  if (!$r){
    echo 'SQL error ... please try again.';
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
       if($key == "cs_id"){
         $href="view_campsite.php?csid=".$value;
         echo "<td><a href='$href'>$value</a></td>";
       }
       else{
         echo "<td>$value</td>";
       }	 
     }
     echo "</tr>";
   }
   echo "</table>";
  }
}
?>
</p>
</body>
</html>


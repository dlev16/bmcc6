<?php 
// customers.php
// kbyron@bmcc.cuny.edu
// 4-23-2020
// display registered customers
?>
<html>
<head>
  <title>CUSTOMERS</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - REGISTERED CUSTOMERS</h1>
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
  echo 'Connection error.  Please try again.';
}
else {
  $q = 'select * from customer';
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
       if($key == "c_id"){
         $href="view_customer.php?cid=".$value;
         echo "<td><a href='$href'>$value</a></td>";
       }
       else{
         if($key == "c_piclink"){
           echo "<td><img src='$value' alt='No image available.' style='width:64px;' ></td>";
         }
         else{
           echo "<td>$value</td>";
         }
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

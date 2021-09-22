<?php
// view_campsite-b.php
// kbyron@bmcc.cuny.edu
// rev 5-1-2020
// complete campsite reservation process
?>
<html>
<head>
  <title>RESERVATION</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - CAMPSITE RESERVATION</h1>
</head>
<body>
<?php 
include 'header.php';
$cid =      $_SESSION['cid'];
$csid =     $_SESSION['csid'];
$fee =      $_SESSION['fee'];
$usage =    $_SESSION['usage'];
$arrival =  $_REQUEST['arrival'];
$stay =     $_REQUEST['stay'];
$newusage=$usage+$stay;
$charge=$stay*$fee;
require 'connectdb.php';
if (!$dbc) {
  echo 'Connection error.  Please try again.';
}
else {
  $q="insert into reservation (r_cid,r_csid,r_arrival,r_stay,r_charge,r_date,r_time) ";
  $q.="values ('$cid','$csid','$arrival','$stay','$charge',CURDATE(),CURTIME())";
  $r = mysqli_query($dbc,$q);
  if(!$r){
    echo "q = $q <br><br>";
    echo "Reservation error ... please try again ... ";
  }
  else{
    $q="update campsite set cs_usage = '$newusage' where cs_id = '$csid'"; 
    $r = mysqli_query($dbc,$q);
    if(!$r){
      echo "q = $q <br><br>";
      echo "Reservation error ... please try again ... ";
    }
    else{
      echo "Reservation confirmed ... thank you ... ";
    }
  }
}
?>
</body>
</html>



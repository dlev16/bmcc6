<?php
// logout.php
// kbyron@bmcc.cuny.edu
// modified 4-23-2020
?>
  <title>LOGOUT</title>
  <h1>CIS362 INFO CENTER - LOGOUT</h1>
<?php
include 'header.php';
$cid  = $_SESSION["cid"];
if($cid != ""){
  $q="insert into activity (a_id,a_date,a_time,a_event) values ('$cid',CURDATE(),CURTIME(),'logout')";
  require 'connectdb.php';
  if (!$dbc) {
    echo 'Connection error.  Please try again.';
  }
  else {
    $r = mysqli_query($dbc,$q);
  }
}
$_SESSION = array();
session_destroy();
header("location: login.php");
?>
</body>
</html>

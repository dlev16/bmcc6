<?php
// reg-c.php
// kbyron@bmcc.cuny.edu
// rev 4-23-2020
// complete registration process
?>
<html>
<head>
  <title>REGISTER</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - REGISTER</h1>
</head>
<body>
<?php 
include 'header.php';
$cid = $_SESSION['email'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST["lname"];
$pass  = $_REQUEST["pass"];
$hash  = hash("sha256",$pass);  // note: sha256 is not a secure encryption algorithm; 
require 'connectdb.php';
if (!$dbc) {
  echo 'Connection error.  Please try again.';
}
else {
  $q="insert into activity (a_id,a_date,a_time,a_event) values ('$cid',CURDATE(),CURTIME(),'register')";
  $r = mysqli_query($dbc,$q);
  if(!$r){
    echo "query = $q <br> ";
    echo "Registration failed ... please try again ... <br> ";
  }
  else{
    $piclink="images/anonymous_pic.png";
    $q="insert into customer (c_id,c_fname,c_lname,c_pw,C_piclink) values ('$cid','$fname','$lname','$hash','$piclink')";
    $r = mysqli_query($dbc,$q);
    if(!$r){
      echo "query = $q <br> ";
      echo "Registration failed ... please try again ... <br> ";
    }
    else{
      header("location: login.php");
    }
  }
}
?>
</body>
</html>

?>


<?php
// login-b.php
// kbyron
// rev 9-21-2020
?>
<html>
<head>
  <title>LOGIN</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - LOGIN</h1>
</head>
<body>
<?php 
include 'header.php';
$email = $_REQUEST['email'];
$cid   = $email;
$pass  = $_REQUEST['pass'];
$hash  = hash("sha256",$pass);                              // note: sha256 is not a secure encryption algorithm
require 'connectdb.php';
if (!$dbc) {
  echo 'Database error ... please try again ...';
}
else {
  $q = "select c_id,c_pw from customer where c_id = '$email' and c_pw = '$hash'";
  $r = mysqli_query($dbc,$q);
  $line = mysqli_fetch_array($r, MYSQLI_ASSOC);
  if (!$line){
    echo "query = $q <br> ";
    echo '<br>Login failed ... please try again ... <br>';
  }
  else {
    session_start();
    $_SESSION["cid"]=$cid;
    $_SESSION["userstatus"]="authorized";
    $q="insert into activity (a_id,a_date,a_time,a_event) values ('$cid',CURDATE(),CURTIME(),'login-pw')";
    require 'connectdb.php';
    if (!$dbc) {
      echo 'Connection error.  Please try again.';
    }
    else {
      $r = mysqli_query($dbc,$q);
    }
    header("location: home.php");
  }
}
?>
</body>
</html>

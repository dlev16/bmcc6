<?php
// reg-b.php
// kbyron@bmcc.cuny.edu
// rev 4-23-2020
// verify that email address is unique ...
?>
<html>
<head>
  <title>REGISTER</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - REGISTER</h1>
</head>
<body>
<?php 
include 'header.php';
if(empty($_REQUEST['email'])){
  header('location: register.php');
}
else{
  $email = $_REQUEST['email'];
  $_SESSION['email']=$email;
  // connect to the MySQL server, issue a query, check result ...
  require 'connectdb.php';
  if (!$dbc) {
    echo 'Connection error.  Please try again.';
  }
  else {
    $q = 'select c_id from customer where c_id = "'.$email.'"';
    $r = mysqli_query($dbc,$q);
    $line = mysqli_fetch_array($r, MYSQLI_ASSOC);
    if ($line){
      echo '<br>That email address is not available ... please try again ... <br>';
    }
    else {
      echo 'The email address you entered is available.<br>';
      echo 'Please enter all information requested below to complete your registration.<br>';
      echo 'After registration, you will be asked to login.<br>';
      echo '<form action="reg-c.php" method="post">';
      echo '  <p>Enter information in the spaces provided, then click REGISTER:</p>';
      echo '  <p><label>First name: <input type="text" name="fname" size="40" maxlength="60"></label></p>';
      echo '  <p><label>Last name: <input type="text" name="lname" size="40" maxlength="60"></label></p>';
      echo '  <p><label>Password: <input type="password" name="pass" size="40" maxlength="60"></label></p>';
      echo '  <p><input type="submit" value= "REGISTER" name="submit"></p>';
      echo ' </form>';
    }
  }
}
?>
</body>
</html>

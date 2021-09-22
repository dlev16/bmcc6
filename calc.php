<?php
// calc.php
// kbyron@bmcc.cuny.edu
// rev 4-19-2020
?>
<html>
<head>
  <title>CALC RESULT</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - CALC RESULT</h1>
</head>
<body>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
$cid  = $_SESSION["cid"];
$q="insert into activity (a_id,a_date,a_time,a_event) values ('$cid',CURDATE(),CURTIME(),'calc')";
require 'connectdb.php';
if (!$dbc) {
  echo 'Connection error.  Please try again.';
}
else {
  $r = mysqli_query($dbc,$q);
}
$num1 = $_REQUEST['number1'];
$num2 = $_REQUEST['number2'];
$operation = $_REQUEST['operation'];
//
// calc code starts from here
//
if ($operation == 'add') $result = $num1+$num2;
if ($operation == 'divide') $result = $num1/$num2;
if ($operation == 'multiply') $result = $num1*$num2;
if ($operation == 'subtract') $result = $num1-$num2;
// Print the requested information:
echo "<br><br><br>";
echo "<h3>The result is ".number_format($result).". </h3>";
?>
</body>
</html>

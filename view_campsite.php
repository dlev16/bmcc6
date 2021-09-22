<?php 
// view_campsite.php
// kbyron@bmcc.cuny.edu
// 5-1-2020
// display selected campsite
?>
<html>
<head>
  <title>VIEW CAMPSITE</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - VIEW CAMPSITE</h1>
</head>
<body>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
$csid=$_GET['csid'];
$cid  = $_SESSION["cid"];
// echo "<br><br>cid = $cid<br><br>";
require 'connectdb.php';
if (!$dbc) {
  echo 'Database connection error ...  please try again.';
}
else {
  $q = 'select * from campsite where cs_id = "'.$csid.'"';
  // echo "q = $q <br>"; 
  $r = mysqli_query($dbc,$q);
  if (!$r){
    echo 'Invalid campsite id ... please try again.';
  }
  else {
    while ($line = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
      // print_r($line);
      foreach ($line as $key => $value) {
        // echo "key = $key ... value = $value ... <br>";
	switch ($key){
	  case "cs_id":
            $_SESSION['csid']=$csid;
	    break;
	  case "cs_name":
	    $name=$value;
	    break;
	  case "cs_city":
	    $city=$value;
	    break;
	  case "cs_state":
	    $state=$value;
	    break;
	  case "cs_fee":
	    $fee=$value;
            $_SESSION['fee']=$fee;
	    break;
	  case "cs_capacity":
	    $capacity=$value;
	    break;
	  case "cs_usage":
	    $usage=$value;
            $_SESSION['usage']=$usage;
	    break;
	}
      }
      echo "<br>";
    }
    print "<table border=1>\n";
    echo "<tr><td>Campsite name:</td><td>$name</td></tr>";
    echo "<tr><td>City:</td><td>$city</td></tr>";
    echo "<tr><td>State:</td><td>$state</td></tr>";
    echo "<tr><td>Daily fee:</td><td>$fee</td></tr>";
    echo "<tr><td>Campsite reservation capacity:</td><td>$capacity</td></tr>";
    echo "<tr><td>Current usage:</td><td>$usage</td></tr>";
    echo "</table><br><br>";
    echo 'To make a reservation, please enter arrival date and length of stay below ... then click RESERVE ... <br>';
    echo '<form action="view_campsite-b.php" method="post">';
    echo '  <p>Enter information in the spaces provided, then click RESERVE:</p>';
    echo '  <p><label>Date of arrival: <input type="date" name="arrival" size="20" maxlength="20"></label></p>';
    echo '  <p><label>Length of stay (days): <input type="text" name="stay" size="20" maxlength="20"></label></p>';
    echo '  <p><input type="submit" value= "RESERVE" name="submit"></p>';
    echo ' </form>';
  }
}
?>
</body>
</html>



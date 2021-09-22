<?php 
// view_customer.php
// kbyron@bmcc.cuny.edu
// 5-1-2020
// display selected customer
?>
<html>
<head>
  <title>CUSTOMERS</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - VIEW CUSTOMER</h1>
</head>
<body>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
$cid=$_GET['cid'];
// echo "<br><br>cid = $cid<br><br>";
require 'connectdb.php';
if (!$dbc) {
  echo 'Database connection error ...  please try again.';
}
else {
  $q = 'select * from customer where c_id = "'.$cid.'"';
  $r = mysqli_query($dbc,$q);
  if (!$r){
    echo "query = $q <br>"; 
    echo 'Invalid customer id ... please try again.';
  }
  else {
    while ($line = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
      // print_r($line);
      foreach ($line as $key => $value) {
        // echo "key = $key ... value = $value ... <br>";
	switch ($key){
	  case "c_id":
	    break;
	  case "c_fname":
	    $fname=$value;
	    break;
	  case "c_lname":
	    $lname=$value;
	    break;
	  case "c_pw":
	    $pw=$value;
	    break;
	  case "c_piclink":
	    $piclink=$value;
	    break;
	}
      }
      echo "<br>";
    }
    print "<table border=1>\n";
    echo "<tr><td>Email:</td><td>$cid</td></tr>";
    echo "<tr><td>First name:</td><td>$fname</td></tr>";
    echo "<tr><td>Last name:</td><td>$lname</td></tr>";
    echo "<tr><td>Photo:</td><td><img src='$piclink' alt='No image available.' 
          style='width:256px;' ></td></tr>";
    echo "</table><br><br>";
    $q = 'select a_event,a_date,a_time from activity where a_id = "'.$cid.'"';
    $r = mysqli_query($dbc,$q);
    if (!$r){
      echo 'Customer account activity ... none ...';
    }
    else {
      echo 'Customer account activity follows ...';
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
      echo "</table><br>";
    }
    $q = 'select cs_name,cs_city,cs_state,r_arrival,r_stay,r_charge,r_date,r_time ';
    $q.= ' from campsite,reservation where r_cid = "'.$cid.'" and r_csid = cs_id';
    $r = mysqli_query($dbc,$q);
    if (!$r){
      echo "q = $q <br>";
      echo 'Customer campsite reservation activity ... none ... <br>';
    }
    else {
      if($r->num_rows == 0){
        echo 'Customer campsite reservation activity ... none ... <br>';
      }
      else{ 
        echo 'Customer campsite reservation activity follows ...';
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
        echo "</table><br>";
      }
    }
  }
}
?>
</body>
</html>


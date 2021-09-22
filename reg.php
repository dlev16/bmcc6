<?php
// reg.php
// kbyron@bmcc.cuny.edu
// modified 4-23-2020
// register new customer
?>
  <title>REGISTER</title>
  <h1>CIS362 INFO CENTER - REGISTER</h1>
<?php
include 'header.php';
?>
<!-- Define a registration form, when button is clicked, reg-b.php will be executed -->
<form action="reg-b.php" method="post">
  <p>Enter Email address, then click REGISTER:</p>
  <p><label>Email address: <input type="text" name="email" size="40" maxlength="60"></label></p>
  <p><input type="submit" value= "REGISTER" name="submit"></p>
</form>
</body>
</html>

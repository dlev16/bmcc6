<?php
// login.php
// kbyron
// modified 9-21-2020
?>
  <title>LOGIN</title>
  <h1>CIS362 INFO CENTER - LOGIN</h1>
<?php
include 'header.php';
if(session_status() == PHP_SESSION_ACTIVE){
  $_SESSION = array();
  session_destroy();
}
?>
<form action="login-b.php" method="post">
  <p>Enter Email address and password, then click LOGIN:</p>
  <p><label>Email address: <input type="text" name="email" size="40" maxlength="60"></label></p>
  <p><label>Password:      <input type="password" name="pass"  size="40" maxlength="60"></label></p>
  <p><input type="submit" value= "LOGIN" name="submit"></p>
</form>
</body>
</html>

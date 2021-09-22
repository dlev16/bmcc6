<?php
// home.php
// kbyron@bmcc.cuny.edu
// modified 4-23-2020
?>
  <title>HOME</title>
  <h1>CIS362 INFO CENTER - HOME</h1>
<?php
include 'header.php';
if(!($_SESSION["userstatus"] == "authorized")){
  header('location: login.php');
}
?>
<!-- Define a form, when button is clicked, calc.php will be executed -->
<form action="calc.php" method="post">
  <p>Enter two numbers and select an operation:</p>
  <p><label>Number 1: <input type="text" name="number1" size="20" maxlength="40"></label></p>
  <p><label>Number 2: <input type="text" name="number2" size="40" maxlength="60"></label></p>
  <p><label>Operation:
  <select name="operation">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
  </select></label></p>
  <p><input type="submit" value= "EXECUTE" name="submit"></p>
</form>
</body>
</html>

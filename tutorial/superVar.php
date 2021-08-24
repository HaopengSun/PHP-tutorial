<?php
  // super gloable variables $_GET $_POST $_COOKIE $_SESSION $_GLOBLES

  $x = 5;

  function sth(){
    $y = 10;
    echo $GLOBALS['x'];
  }

  sth();
?>

<form method="GET">
  <input type="hidden" name="name" value="Daniel">
  <button type="submit">Press me! (GET)</button>
</form>

<form method="POST">
  <input type="hidden" name="name" value="John">
  <button type="submit">Press me! (POST)</button>
</form>

<?php
  echo $_POST['name'];
?>

<?php
  // set cookie
  setcookie("name", "hello world", time() + 86400);

  // set session
  $_SESSION['password'] = "hp12";
?>


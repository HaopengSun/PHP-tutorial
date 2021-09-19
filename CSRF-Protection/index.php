<?php
  session_start();

  if (empty($_SESSION['key'])){
    $_SESSION['key'] = bin2hex(random_bytes(32));
  }

  // hash_hmac — Generate a keyed hash value using the HMAC method
  $csrf = hash_hmac('sha256', 'this is some string: index.php', $_SESSION['key']);

  if (isset($_POST['submit'])){
    if (hash_equals($csrf, $_POST['csrf'])){
      echo "Your name is: " . $_POST['username'];
    } else {
      echo "CSRF token failed";
    }
  }
?>

<html>
  <head>
    <title>CSRF Tutorual</title>
  </head>
  <body>
    <form action="index.php" method="POST">
      <input type="text" name="username" placeholder="Input your name">
      <input type="hidden" name="csrf" value="<?php echo $csrf?>">
      <input type="submit" name="submit" value="SUBMIT">
    </form>
  </body>
</html>
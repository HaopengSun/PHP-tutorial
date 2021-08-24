<?php
  session_start()
?>

<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php
  echo $_SESSION['username'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sign up</title>
</head>

<form action="includes/signup.inc.php" method="POST">
  <?php
    if(isset($_GET['first'])){
      $first = $_GET['first'];
      echo '<input type="text" name="first" placeholder="first name" value="'.$first.'">';
    } else {
      echo '<input type="text" name="first" placeholder="first name">';
    }

    echo "<br>";

    if(isset($_GET['last'])){
      $last = $_GET['last'];
      echo '<input type="text" name="last" placeholder="last name" value="'.$last.'">';
    } else {
      echo '<input type="text" name="last" placeholder="last name">';
    }
  ?>
  
  <br>
  <input type="text" name="email" placeholder="email">
  <br>
  <input type="text" name="uid" placeholder="user name">
  <br>
  <input type="password" name="pwd" placeholder="password">
  <br>
  <button type="submit" name="submit">Sign up</button>
</form>

<a href="index.php">home</a>

<?php
  // show info of whether the user signs up or not

  // whole url is copied
  // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  // if (strpos($fullUrl, "signup=empty") == true){
  //   echo "<p class='error'>You did not fill in all fields!</p>";
  // } elseif (strpos($fullUrl, "signup=char") == true){
  //   echo "<p class='error'>You use invalid char!</p>";
  // } elseif (strpos($fullUrl, "signup=email") == true){
  //   echo "<p class='error'>You use invalid email!</p>";
  // } elseif (strpos($fullUrl, "signup=success") == true){
  //   echo "<p class='success'>You signed up!</p>";
  // }

  // use GET method to get what is in the url
  if (!isset($_GET['signup'])){
    exit();
  } else {
    $signupCheck = $_GET['signup'];
    switch($signupCheck){
      case "empty":
        echo "<p class='error'>You did not fill in all fields!</p>";
        exit();
      case "char":
        echo "<p class='error'>You use invalid char!!</p>";
        exit();
      case "email":
        echo "<p class='error'>You use invalid email!</p>";
        exit();
      case "success":
        echo "<p class='success'>You signed up!</p>";
        exit();
    }
  }
?>
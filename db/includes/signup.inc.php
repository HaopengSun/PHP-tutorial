<?php
  include_once 'dbh.inc.php';

  // protect data
  $first = mysqli_real_escape_string($conn, $_POST["first"]);
  $last = mysqli_real_escape_string($conn, $_POST["last"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
  $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

  // $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd )
  //         VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
  // mysqli_query($conn, $sql);

  // prepared statement
  $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd )
        VALUES ('$first', '$last', '$email', '$uid', '$pwd');";

  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd ) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss",$first, $last, $email, $uid, $pwd);
  $stmt->execute();

  header("location: ../index.php?signup=success");

?>
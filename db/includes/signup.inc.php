<?php

if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';

    // protect data
    $first = mysqli_real_escape_string($conn, $_POST["first"]);
    $last = mysqli_real_escape_string($conn, $_POST["last"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

    // validate the use inputs
    if( empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
      header("location: ../insertDB.php?signup=empty");
      exit();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("location: ../insertDB.php?signup=email&first=$first&last=$last&uid=$uid");
          exit();
        } else {
          if (!prep_match("/^[a-zA-Z]*$", $first) || !prep_match("/^[a-zA-Z]*$", $last) || !prep_match("/^[a-zA-Z]*$", $uid)) {
            header("location: ../insertDB.php?signup=chat");
            exit();
          } else {
            // insert directly
            // $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd )
            //         VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
            // mysqli_query($conn, $sql);

            // insert using prepared statement
            $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd )
                  VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd ) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss",$first, $last, $email, $uid, $pwd);
            $stmt->execute();

            header("location: ../insertDB.php?signup=success");
        }
      } 
    }
  } else {
    header("location: ../insertDB.php?signup=error");
  }


?>
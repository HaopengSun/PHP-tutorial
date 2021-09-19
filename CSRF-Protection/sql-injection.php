<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Escape special characters, if any
$firstname = $mysqli -> real_escape_string($_POST['firstname']);
$lastname = $mysqli -> real_escape_string($_POST['lastname']);
$age = $mysqli -> real_escape_string($_POST['age']);

$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";

if (!$mysqli -> query($sql)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
}

$mysqli -> close();
?>
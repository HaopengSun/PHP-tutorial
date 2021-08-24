<?php

$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo $row['user_uid']."<br>";
  }
}

echo "<br>";
echo "Another OOP method: ";
echo "<br>";

$result1 = $conn->query($sql);
while ($row1 = $result1->fetch_assoc()) {
    echo $row1["user_first"]."<br>";
}
?>
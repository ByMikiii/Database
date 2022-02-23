<?php
require 'Connection.php';

$sql = "SELECT id, username, password, avatar FROM users";
$result = $conn->query($sql);

//print_r($result);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "id: ". $row["id"]. "</br>";
    echo "username: ". $row["username"]. "</br>";
    echo "password: ". $row["password"]. "</br>". "</br>";
    // echo "<img src='" . $row["avatar"] . "'/></br>";
  }
}
else {
  echo "0 results.";
}
?>
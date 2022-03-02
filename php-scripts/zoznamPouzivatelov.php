<?php
require 'Connection.php';

$sql = "SELECT id, username, password, avatar FROM users";
$result = $conn->query($sql);


if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "ID: ". $row["id"]. "</br>";
    echo "USERNAME: ". $row["username"]. "</br>" . "</br>";
  }
}

?>
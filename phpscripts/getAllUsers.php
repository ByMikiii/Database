<?php
include('../phpscripts/connection.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
  array_push($users, $user);
}


/*foreach ($users as $user){
  print_r ($user);
  echo "</br>";
}*/



?>
<?php 
require './connection.php';

$userUsername = $_POST['userUsername'];

$currentHashedPassword = MD5($_POST['current-password']);
$newHashedPassword = MD5($_POST['new-password']);
$newHashedPasswordRepeat = MD5($_POST['new-passwordrepeat']);

$sql = "SELECT * FROM users WHERE username = '".$userUsername."'";
$result = $conn->query($sql);
$users = [];

if($user = $result->fetch_assoc()){
  array_push($users, $user);
}


if(hash_equals($newHashedPassword, $newHashedPasswordRepeat)){
  if($currentHashedPassword == $user['password'] && $currentHashedPassword != $newHashedPassword){
    $sql = "UPDATE users SET password = '".$newHashedPassword."' WHERE username LIKE '". $userUsername."'";
    if ($conn->query($sql) === TRUE) {
      header('Location: /profile/?username='.$userUsername);
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }else {
    header('Location: /profile/?username='.$userUsername);
  }
}else{
  header('Location: /profile/?username='.$userUsername);
}

?>

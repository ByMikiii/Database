<?php 
require './connection.php';

$userUsername = $_POST['userUsername'];

$currentHashedPassword = MD5($_POST['current-password']);
$newHashedPassword = MD5($_POST['new-password']);
$newHashedPasswordRepeat = MD5($_POST['new-passwordrepeat']);


if(hash_equals($newHashedPassword, $newHashedPasswordRepeat)){
  echo 'good';
}else{
  echo 'not good';
}


//$sql = "UPDATE users SET password = '".$newHashedPassword."' WHERE username LIKE '". $userUsername."'";

//$conn->query($sql);
?>

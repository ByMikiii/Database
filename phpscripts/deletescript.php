<?php
require './connection.php';

$userId = $_POST['userId'];

$sql = "DELETE FROM users WHERE user_id = $userId";
if ($conn->query($sql) === TRUE) {
  session_start();
  unset($_SESSION["username"]);
  session_destroy();
  header("Location: /pages/zoznamPouzivatelov.php");
}else{
  echo 'error';
}
<?php
require 'connection.php';

$username = $_POST['username'];
$hashedPassword = MD5($_POST["password"]);;

$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword' ";
$result = mysqli_query($conn, $sql);
$sql2= "SELECT avatar FROM users WHERE username = '$username'";
$avatar = $conn->query($sql2);

if($result->num_rows ==1) {
  $row = mysqli_fetch_assoc($result);
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['avatar'] = $avatar;
  
  echo $avatar;
  //header("Location: ../index.php");
} else {
  //header ("Location: ../pages/login.php?message=Zle meno alebo heslo!");
}
<?php
require 'connection.php';

$username = $_POST['username'];
$hashedPassword = MD5($_POST["password"]);;

$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword' ";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT avatar, id FROM users WHERE username = 'Jozef'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result2)) {
    $avatar = $row["avatar"];
    $id = $row["id"];
  }
}

if($result->num_rows == 1) {
  $row = mysqli_fetch_assoc($result);
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['avatar-path'] = $avatar;
  $_SESSION['id'] = $id;
  
  header("Location: ../index.php");
} else {
  header ("Location: ../pages/login.php?message=Zle meno alebo heslo!");
}
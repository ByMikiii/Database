<?php
require './connection.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn, $sql);

if ($username == "" || $password == ""){
  echo "Nezadali ste vsetky potrebne udaje";
}else if($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['username'] = $row['username'];
  echo "Welcome ".$username."!";
} else {
  echo "Nespravne meno alebo heslo!";
}
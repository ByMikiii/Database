<?php 
require './connection.php';

$usernameProfile = $_POST['userUsername'];


$editedUsername = $_POST['username'];
$editedEmail = $_POST['email'];
$editedFirstname = $_POST['firstname'];
$editedLastname = $_POST['lastname'];
$editedDateOfBirth = $_POST['dateofbirth'];

$sql = "UPDATE users SET username = '".$editedUsername."', first_name = '".$editedFirstname."', last_name = '".$editedLastname."', email = '".$editedEmail."', birth_date = '".$editedDateOfBirth."'  WHERE username = '".$usernameProfile."'";

if ($conn->query($sql) === TRUE) {
  session_start();
  $_SESSION['username'] = $editedUsername;
  header('Location: /profile/?username='.$editedUsername);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
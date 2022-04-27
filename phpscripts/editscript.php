<?php 
require './connection.php';

$usernameProfile = $_POST['usernameprofile'];


$editedUsername = $_POST['username'];
$editedEmail = $_POST['email'];
$editedFirstname = $_POST['firstname'];
$editedLastname = $_POST['lastname'];
$editedDateOfBirth = $_POST['dateofbirth'];

$sql = "UPDATE users SET username = '".$editedUsername."' WHERE username = '".$usernameProfile."'";

$conn->query($sql);


echo $usernameProfile.'<br>';

echo $editedUsername.'<br>';
echo $editedEmail.'<br>';
echo $editedFirstname.'<br>';
echo $editedLastname.'<br>';
echo $editedDateOfBirth.'<br>';


?>
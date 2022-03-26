<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_herny_obchod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
 // echo "fici";
}
?>

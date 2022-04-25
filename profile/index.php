<?php
$username = $_GET["username"];
$title = 'Profile - '.$username;
$dbusername = "'".$username."'";
$pathToIcon = '/Images/monkaH.png';
require '../phpscripts/connection.php';
require '../parts/header.php'; 

$sql = "SELECT * FROM users WHERE username LIKE $dbusername";
$result = $conn->query($sql);
$users = [];

if($user = $result->fetch_assoc()){
  array_push($users, $user);
}
?>
<div .container>
<img id='profile-profilepicture' src="<?php echo $user['avatar'] ?>" alt="Profile Picture">
<p id='profile-username'><?php echo $user['username'] ?></p>


</div>




<?php
 require '../parts/footer.php'; ?>
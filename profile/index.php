<?php
if(isset($_GET["username"])){
  $userUsername = $_GET["username"];
}else { 
  $uuu = $_SESSION["username"];
  $userUsername = $uuu;
}
$title = 'Profile - '.$userUsername;
$pathToIcon = '/Images/monkaH.png';
require '../phpscripts/connection.php';
require '../parts/header.php'; 

$sql = "SELECT * FROM users WHERE username LIKE '".$userUsername."'";
$result = $conn->query($sql);
$users = [];

if($user = $result->fetch_assoc()){
  array_push($users, $user);
}

$sessionUsername = isset($_SESSION['username']) ? $_SESSION['username'] : 'Unknown';

$firstname = isset($user['first_name']) ? $user['first_name'] : 'Unknown';
$lastname = isset($user['last_name']) ? $user['last_name'] : 'Unknown';
$dateOfBirth = isset($user['birth_date']) ? $user['birth_date'] : 'Unknown';
$bio = isset($user['bio']) ? $user['bio'] : 'Unknown';
?>
<div .container>
  <div class='header'>
<img id='profile-profilepicture' src="<?php echo $user['avatar'] ?>" alt="Profile Picture">
<p id='profile-username'><?php echo $user['username'] ?></p>
<p class='profile-bio'><?php echo $bio ?></p>
  </div>

<div class='profile-name' >
<div class='profile-element' id='profile-firstname' >
<p class='profile-nametag'>First Name</p>
<p class='profile-info'><?php echo $firstname?></p>
</div>
<div class='profile-element' id='profile-lastname'>
<p class='profile-nametag'>Last Name</p>
<p class='profile-info'><?php echo $lastname?></p>
</div>
</div>

<div class='profile-element'>
<p class='profile-nametag'>Email</p>
<p id='profile-email' class='profile-info'><?php echo $user['email']?></p>
</div>

<div class='profile-element'>
<p class='profile-nametag'>Age</p>
<p id='profile-age' class='profile-info'><?php echo $dateOfBirth ?></p>
</div>

<div class='profile-element'>
<p class='profile-nametag'>Date of Registration</p>
<p id='profile-datecreate' class='profile-info'><?php echo $user['date_created']?></p>
</div>

<?php if($sessionUsername == $user['username']) : ?>
  <form action="./edit/" method='POST'>
  <input type="hidden" id="userUsername" name="userUsername" value='<?php echo $userUsername?>'>
  <button type="submit" class="btn" id='profile-editbutton'>Edit Account</button>
  </form>
<?php endif ?>

<?php
 require '../parts/footer.php'; ?>
<?php
$userUsername = $_GET["username"];
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
  <button type="button" class="btn" id='profile-editbutton'>Edit Account</button>

  <div id='profile-editwindow'>
    <h1 id='profile-editheading'>Edit Account</h1>
  <form action="../phpscripts/editscript.php" method=POST id='profile-editform'>

  <img id='profile-editprofilepicture' src="<?php echo $user['avatar'] ?>" alt="Profile Picture"><br>

  <label for="username" class='profile-editlabel'>Username</label><br>
  <input type="text" id="edit-username" name="username" value='<?php echo $user['username']?>'><br>

  <label for="email" class='profile-editlabel'>Email</label><br>
  <input type="email" id="edit-email" name="email" value='<?php echo $user['email']?>'><br>

  <label for="firstname" class='profile-editlabel'>First name</label><br>
  <input type="text" id="edit-firstname" name="firstname" value='<?php echo $firstname?>'><br>

  <label for="lastname" class='profile-editlabel'>Last name</label><br>
  <input type="text" id="edit-lastname" name="lastname" value='<?php echo $lastname?>'><br>

  <label for="dateofbirth" class='profile-editlabel'>Date of Birth</label><br>
  <input type="date" id="edit-dateofbirth" name="dateofbirth" value='<?php echo $dateOfBirth?>'><br>

  <input type="hidden" name="usernameprofile" value="<?php echo $userUsername; ?>">
  <p>Change Password?</p>

  <button type="submit" class="btn" id='profile-editsubmitformbutton'>Submit</button>

  <p>Error Message</p>

  </form>
  </div>
<?php endif ?>

<?php
 require '../parts/footer.php'; ?>
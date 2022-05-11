<?php
$userUsername = isset($_POST['userUsername']) ? $_POST['userUsername'] : header('Location: /');
$title = 'Edit Profile - '. $userUsername;
$pathToIcon = '/Images/monkaH.png';

require '../../phpscripts/connection.php';
require '../../parts/header.php'; 

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

<div id='profile-editwindow' class='profile-editwindow'>

  <form action="../?username=<?php echo $userUsername ?>" method='POST'>
    <p><input type="image" src="/Images/arrowback.png" class='edit-arrowback' alt="Submit"></p>
  </form>

  <h1 class='profile-editheading'>Edit Account</h1>
  <form action="./avatar/" method="post">
    <input type="hidden" name="userUsername" value='<?php echo $userUsername?>'>
    <input type="hidden" name="userAvatar" value="<?php echo $user['avatar']?>">
    <input type="image" id="profile-editprofilepicture" src="<?php echo $user['avatar'] ?>" alt="Submit">
  </form>

  <form action="../../phpscripts/editscript.php" method=POST class=' profile-editform'>

    <input type="hidden" id="userUsername" name="userUsername" value='<?php echo $userUsername?>'>

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

    <button type="submit" class="btn profile-editsubmitformbutton">Submit</button>

    <p class='error'>Error Message</p>

  </form>

  <form action="./password/" method='POST'>
    <input type="hidden" id="userUsername" name="userUsername" value='<?php echo $userUsername?>'>
    <button type="submit" class="btn">Change Password?</button>
  </form>

</div>


<?php
 require '../../parts/footer.php';
 ?>
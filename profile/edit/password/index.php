<?php
$userUsername = isset($_POST['userUsername']) ? $_POST['userUsername'] : header('Location: /');
$title = 'Edit Profile - '. $userUsername;
$pathToIcon = '/Images/monkaH.png';

require '../../../phpscripts/connection.php';
require '../../../parts/header.php'; 
?>

<div id='profile-changepassword' class='profile-editwindow'>


  <form action="/profile/edit/" method='POST'>
  <input type="hidden" id="userUsername" name="userUsername" value='<?php echo $userUsername?>'>
  <p><input type="image" src="/Images/arrowback.png" class='edit-arrowback' alt="Submit"></p>
  </form>


  <h1 class='profile-editheading' id='changepassword-heading'>Change Password</h1>

  <form action="../../../phpscripts/changepasswordscript.php" method=POST class='profile-editform' id='changepasswordform'>
  <label for="current-password" class='profile-editlabel'>Current Password</label><br>
  <input type="password" name="current-password" required><br>

  <label for="new-password" class='profile-editlabel'>New Password</label><br>
  <input type="password" name="new-password" required><br>

  <label for="new-passwordrepeat" class='profile-editlabel'>Repeat New Password</label><br>
  <input type="password" name="new-passwordrepeat" required><br>
  <input type="hidden" id="userUsername" name="userUsername" value='<?php echo $userUsername?>'>
  <button type="submit" class="btn profile-editsubmitformbutton">Submit</button>

  <p class='error'>Error Message</p>
  </form>
  </div>


<?php
 require '../../../parts/footer.php';
 ?>
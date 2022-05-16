<?php
$userUsername = isset($_POST['userUsername']) ? $_POST['userUsername'] : header('Location: /');
$title = 'Edit Profile - '. $userUsername;
$pathToIcon = '/Images/monkaH.png';

require '../../../phpscripts/connection.php';
require '../../../parts/header.php'; 

$username = $_POST['userUsername'];
$avatarPath = $_POST['userAvatar'];
?>


<img id='profile-editprofilepicture' src="<?php echo $avatarPath?>" alt="Profile Picture"><br>

<form action="../../../../phpscripts/changeAvatar.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="hidden" name="userUsername" value="<?php echo $userUsername?>">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php
 require '../../../parts/footer.php';
 ?>
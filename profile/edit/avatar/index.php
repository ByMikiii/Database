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

<form method="POST" action="../../../../phpscripts/changeAvatar.php" enctype="multipart/form-data">

  <input type="file" name="choosefile" value="" />
  <input type="hidden" name="userUsername" value='<?php echo $username?>'>

  <div>

    <button type="submit" name="uploadfile">

      UPLOAD

    </button>

  </div>

</form>

<?php
 require '../../../parts/footer.php';
 ?>
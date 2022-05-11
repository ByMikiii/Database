<?php 
require 'connection.php';

if (isset($_POST['uploadfile'])) {
  $username = $_POST['userUsername'];
  $filename = $_FILES["choosefile"]["name"];

  //$tempname = $_FILES["choosefile"]["tmp_name"];  
 
    $folder = "/Images/".$filename;   

    $sql = "UPDATE users SET avatar = '".$folder."' WHERE username ='".$username."'";
    if ($conn->query($sql) === TRUE) {
      Header('Location: /profile/?username='.$username);
    }else{
      echo 'nedobre';
    }

}
?>
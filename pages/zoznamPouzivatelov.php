<?php require '../parts/header.php'; ?>

<?php

require '../phpscripts/getAllUsers.php';


?>
<div class="listUsers">
<ul class="list">
  <li> 
      <span class='li-nametag'>ID</span>
      <span class='li-nametag'>Avatar</span>
      <span class='li-nametag'>Username</span>
      <span class='li-nametag'>Email</span>
      <span class='li-nametag'>Time of registration</span>
      <span class='li-nametag'>Akcie</span>
  </li> 

<?php foreach ($users as $user) :  ?>
  <li> 
    <span> <?php echo $user["id"] ?> </span>
    <span> <img class='profile-picture' src="/Database/Images/profile.png" alt="Profile Picture"></></span>
    <span> <a  href="./profile.php?id=<?php echo $user["id"]?>"><?php echo $user["username"] ?></a></span>
    <span><?php echo $user["email"] ?></span>
    <span><?php echo $user["created_at"] ?></span>
    <span><?php echo "Akcie" ?></span>
</li>
<?php
 endforeach;
?>
</ul>
</div>
<?php
 require '../parts/footer.php'; ?>
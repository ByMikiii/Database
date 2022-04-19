<?php require '../parts/header.php'; ?>

<?php

require '../phpscripts/getAllUsers.php';


?>
<div class= zoznamPouzivatelov>
<ul class="list-group list-group-horizontal">
  <li style= "background-color: blue;" class="list-group-item">ID</li>
  <li style= "background-color: blue;" class="list-group-item">Avatar</li>
  <li style= "background-color: blue;" class="list-group-item">Username</li>
  <li style= "background-color: blue;" class="list-group-item">Email</li>
  <li style= "background-color: blue;" class="list-group-item">Time of registration</li>
  <li style= "background-color: blue;" class="list-group-item">Akcie</li>
</ul>
<?php foreach ($users as $user) :  ?>
  <ul class="list-group list-group-horizontal">
<li class="list-group-item"> <?php echo $user["id"] ?></li>
  <li class="list-group-item"> <?php  ?></li>
  <li class="list-group-item"> <?php echo $user["username"] ?></li>
  <li class="list-group-item"><?php echo $user["email"] ?></li>
  <li class="list-group-item"><?php echo $user["created_at"] ?></li>
  <li class="list-group-item">Akcie</li>
</ul>
</div>
<?php
 endforeach;
 require '../parts/footer.php'; ?>
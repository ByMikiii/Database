<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/CSS/app.css">
  <link rel="icon" href='<?php echo $pathToIcon ?>'>
  <title><?php echo $title ?></title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-none">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Database">ByMikiii</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/pages/zoznamPouzivatelov.php" class= "btn btn-light nav-btn">List of users</a>
        </li>
        <li class="nav-item">
        <a href="/pages/articles.php?page=1" class= "btn btn-light nav-btn">Articles</a>
        </li>
        <li class="nav-item">
        <a href="/pages/createArticle.php" class= "btn btn-light nav-btn">Create Article</a>
        </li>
        <li class="nav-item">
        <a href="/C2S/" class= "btn btn-light nav-btn">C2S</a>
        </li>
      </ul>
      <?php if (!isset($_SESSION["username"])) : ?>
      <div>
        <a href="/pages/login.php" class= "btn btn-light">Login</a>
        <a href="/pages/register.php" class= "btn btn-light">Register</a>
      </div>
      <?php else : ?>
        <div class="d-flex aling-items-center">
             
        <div class="login-data">           
        <a href="/pages/profile.php?id=<?php echo $_SESSION["id"]?>" ><img class='profile-picture' src="<?php echo $_SESSION["avatar-path"]?>" alt="Profile Picture"></a>

            <span id="login-username"> <?php echo $_SESSION["username"] ?></span>

            </div>
              <a href="/phpscripts/logout.php" class= "btn btn-danger">Log Out</a>
        </div>
        <?php endif; ?>
    </div>
  </div>
</nav>
</header>
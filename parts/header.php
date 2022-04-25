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
<nav class="navbar navbar-dark bg-node navbar-expand-md">
    <img src="/Images/feelsgoodman.png" id='navbar-brand-img' alt="FeelsGoodMan">
    <a href="/" class="navbar-brand">ByMikiii</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="/pages/zoznamPouzivatelov.php" class="nav-link">List of users</a></li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/pages/articles.php" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articles
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/pages/articles.php">Articles Page</a></li>
            <li><a class="dropdown-item" href="/pages/createArticle.php">Create Article</a></li>
          </ul>
            <li class="nav-item"><a href="/C2S/" class="nav-link">C2S</a></li>
        </ul>
            <?php if (!isset($_SESSION["username"])) : ?>
               <ul class="navbar-nav ms-auto">
              <li id='login-button' class="nav-item"><a href="/pages/login.php" class="nav-link">Login</a></li>
              <li id='register-button' class="nav-item"><a href="/pages/register.php" class="nav-link">Register</a></li>
              </ul>
            <?php else : ?>
              <ul class="navbar-nav ms-auto">
              <li class="nav-item">
              <div class="login-data">           
             <a href="/profile/?username=<?php echo $_SESSION["username"]?>" ><img class='profile-picture' src="<?php echo $_SESSION["avatar-path"]?>" alt="Profile Picture"></a>
            <span id="login-username"> <?php echo $_SESSION["username"] ?></span>
            </div>
            </li>
              <li class="nav-item"><a href="/phpscripts/logout.php" class="nav-link">Log Out</a></li>
              </ul>
            <?php endif; ?>  
    </div>
</nav>
</header>

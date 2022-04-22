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
  <link rel="stylesheet" href="/Database/CSS/app.css">
  <title>Domov</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-none">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ByMikiii</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a href="/Database/index.php" class= "btn btn-light nar-btn">Home</a>
        </li>
        <li class="nav-item">
          <a href="/Database/pages/zoznamPouzivatelov.php" class= "btn btn-light nav-btn">List of users</a>
        </li>
        <li class="nav-item">
        <a href="/Database/pages/articles.php?page=1" class= "btn btn-light nav-btn">Articles</a>
        </li>
        <li class="nav-item">
        <a href="/Database/pages/createArticle.php" class= "btn btn-light nav-btn">Create Article</a>
        </li>
      </ul>
      <?php if (!isset($_SESSION["username"])) : ?>
      <div>
        <a href="/Database/pages/login.php" class= "btn btn-success">Login</a>
        <a href="/Database/pages/register.php" class= "btn btn-danger">Register</a>
      </div>
      <?php else : ?>
        <div class="d-flex aling-items-center">
             
        <div class="login-data">           
        <a href="/Database/pages/profile.php?id=<?php echo $_SESSION["id"]?>" ><img class='profile-picture' src="<?php echo $_SESSION["avatar-path"]?>" alt="Profile Picture"></a>

            <span id="login-username"> <?php echo $_SESSION["username"] ?></span>

            </div>
              <a href="/Database/phpscripts/logout.php" class= "btn btn-danger">Log Out</a>
        </div>
        <?php endif; ?>
    </div>
  </div>
</nav>
</header>
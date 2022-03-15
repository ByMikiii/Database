<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel= "stylesheet" href="../CSS/login_style.css">
</head>
<body>
<a href="../index.php" class= "custom-button" id="home">Home</a>
<br>
<div class="login">
<h1>Login</h1><br>
        <form method="POST" action="../php-scripts/login-script.php">
            <input type="text" name="username" id="username" placeholder="Meno">
            <br>
            <input type="password" name="password" id="password" placeholder="Heslo">
            <br>
            <input type="submit" value="Login">
            <br>
            Are you new?  <a href="register.php"> Register</a>
            <br>
        </form> 
</div>
<footer>Ⓒ2022 ByMikiii</footer>
</body>
</html>
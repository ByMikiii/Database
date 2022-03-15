<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel= "stylesheet" href="../CSS/register_style.css">
</head>
<body>
<a href="../index.php" class= "custom-button" id="home">Home</a>
<br>
    <body>
        <div class="register">
        <h1>Register</h1>
        <br>
        <form action="../php-scripts/register-script.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Meno">
            <br>
            <input type="email" name="email" id="email" placeholder="Email">
            <br>
            <input type="Password" name="password" id="password" placeholder="Heslo">
            <br>
            <input type="Password" name="password_check" id="password_check" placeholder="Zopakuj heslo">
            <br>
            <input type="submit" value="Register">
            <br><br>
            Already user?  <a  href="login.php">Login </a>
            <br>
        </form> 
</div>
<footer>Ⓒ2022 ByMikiii</footer>
</body>
</html>
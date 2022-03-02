<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<a href="../index.php" class= "custom-button" id="home">Home</a>
<br>
    <h2>Register Page</h2><br>
    <body>
        <div class="register">
        <form action="../php-scripts/register-script.php" method="POST">
            <label for="username">Meno:</label>
            <input type="text" name="username" id="username" placeholder="Meno">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <br>
            <label for="password">Heslo:</label>
            <input type="Password" name="password" id="password" placeholder="Heslo">
            <br>
            <label for="password_check">Zopakuj heslo:</label>
            <input type="Password" name="password_check" id="password_check" placeholder="Zopakuj heslo">
            <br>
            <input type="submit" value="Registruj">
            <br><br>
            Already user?  <a  href="login.php">Login </a>
            <br>
        </form> 
</div>
</body>
</html>
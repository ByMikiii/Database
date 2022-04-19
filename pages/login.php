<?php 
include('../parts/header.php');

$error = isset($_GET['message']) ? $_GET["message"] : "";
?>

<div class="login">
<h1>Login</h1><br>
        <form method="POST" action="../phpscripts/login-script.php">
            <input type="text" name="username" id="username" placeholder="Meno" required>
            <br>
            <input type="password" name="password" id="password" placeholder="Heslo" required>
            <br>
            <input type="submit" value="Login">
            <p> <?php echo $error ?></p>
            <br>
            Are you new?  <a href="register.php"> Register</a>
            <br>
        </form> 
</div>
<?php include('../parts/footer.php') ?>
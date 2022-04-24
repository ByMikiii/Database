<?php 
$pathToIcon = '/Images/monkaH.png';
$title = 'Login';
include('../parts/header.php');

$error = isset($_GET['message']) ? $_GET["message"] : "";
?>

<div class="login">
<h1>Login</h1><br>
        <form method="POST" action="../phpscripts/login-script.php">
            <input type="text" name="username" id="username" placeholder="Meno" required autocomplete="off">
            <br>
            <input type="password" name="password" id="password" placeholder="Heslo" required autocomplete="off">
            <br>
            <button class="submitbtn" type="submit">Login</button>
            <p class='error'> <?php echo $error ?></p>
            Are you new?  <a href="register.php"> Register</a>
        </form> 
</div>
<?php include('../parts/footer.php') ?>
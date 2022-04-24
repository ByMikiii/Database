<?php
$pathToIcon = '/Images/monkaH.png';
$title = 'Register';
include('../parts/header.php');


$error = isset($_GET['message']) ? $_GET["message"] : "";
?>
        <div class="register">
        <h1>Register</h1>
        <br>
        <form action="../phpscripts/register-script.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Meno" required>
            <br>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <br>
            <input type="Password" name="password" id="password" placeholder="Heslo" required>
            <br>
            <input type="Password" name="password_check" id="password_check" placeholder="Zopakuj heslo" required>
            <br>
            <button class="submitbtn" type="submit">Register</button>
            <p class='error'> <?php echo $error ?></p>
            Already user?  <a  href="login.php">Login </a>
        </form> 
</div>
<?php include('../parts/footer.php') ?>
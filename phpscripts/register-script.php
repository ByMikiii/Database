<?php
require './connection.php';

$username = $_POST['username']; 
$email = $_POST['email'];
$password = $_POST['password'];
$passwordcheck = $_POST['password_check'];

  $hashedPassword = MD5($_POST["password"]);
                    MD5($_POST['password_check']);

  if (!hash_equals($password, $passwordcheck)) {
    $error = "Hesla sa nezhoduju";
    header('Location: /Database/pages/register.php?message='.$error);
  } else if(!preg_match("#.*^(?=.{5,20})(?=.*[a-z])(?=.*[0-9]).*$#", $password)){
    $error = "Heslo ma menej ako 5 znakov alebo neobsahuje cislo!";
    header('Location: /Database/pages/register.php?message='.$error);
  }else {

    $sql = " INSERT INTO users(username, email, password) 
  			  VALUES('$username', '$email', '$hashedPassword')";
        
        if ($conn->query($sql) === TRUE) {
          echo "Uspesne zaregistrovany";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
  }


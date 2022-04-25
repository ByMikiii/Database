<?php
require './connection.php';
require './getAllUsers.php';

$username = $_POST['username']; 
$email = $_POST['email'];
$password = $_POST['password'];
$passwordcheck = $_POST['password_check'];

  $hashedPassword = MD5($_POST["password"]);
                    MD5($_POST['password_check']);

                
    foreach ($users as $user){
    if($username ==  $user["username"]){
     $error = "Používateľské meno už existuje!";
     header('Location: /pages/register.php?message='.$error);
     $error1 = true;
    } else if($email ==  $user["email"]){
      $error = "Email už existuje!";
      header('Location: /pages/register.php?message='.$error);
      $error1 = true;
    }
  }
  if($error != true){
  if (!hash_equals($password, $passwordcheck)) {
    $error = "Hesla sa nezhoduju";
    header('Location: /pages/register.php?message='.$error);
  } else if(!preg_match("#.*^(?=.{5,20})(?=.*[a-z])(?=.*[0-9]).*$#", $password)){
    $error = "Heslo ma menej ako 5 znakov alebo neobsahuje cislo!";
    header('Location: /pages/register.php?message='.$error);
  } else {

    $sql = " INSERT INTO users(username, email, password) 
  			  VALUES('$username', '$email', '$hashedPassword')";
        
        if ($conn->query($sql) === TRUE) {
          header('Location: /?message=Úspešne zaregistrovaný!');
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
  }
}

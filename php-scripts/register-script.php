<?php
require 'connection.php';

$username = $_POST['username']; 
$email = $_POST['email'];
$password = $_POST['password'];
$passwordcheck = $_POST['password_check'];

   password_hash($password, PASSWORD_BCRYPT);
   password_hash($passwordcheck, PASSWORD_BCRYPT);

if($username == null){
  echo "Nezadal si meno";
}else if ($email == null){
  echo "Nezadal si email";
}else if($password == null){
  echo "Nezadal si heslo";
}else if($passwordcheck == null){
  echo "Nezadal si 2. heslo";
} else{
  if (!hash_equals($password, $passwordcheck)) {
    echo "Hesla sa nezhoduju";
  } else {

    $sql = " INSERT INTO users(username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
          echo "Uspesne zaregistrovany";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
  }
}

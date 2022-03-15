<?php
require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "risko" && $password == "risko123"){
  echo "Uspesne prihlasenie!". "</br>";
} else {
  echo "Neuspesne prihlasenie". "</br>";
}

if ($username == "" || $password == ""){
  echo "Nezadali ste vsetky potrebne udaje";
}

$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";

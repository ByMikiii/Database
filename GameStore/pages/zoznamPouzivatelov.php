<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="../index.php" class= "custom-button" id="home">Home</a>

<footer>Ⓒ2022 ByMikiii</footer>
<?php
require '../php-scripts/connection.php';

$sql = "SELECT user_id, username, password FROM users";
$result = $conn->query($sql);  

if(($result->num_rows) > 0){
  while($row = $result->fetch_assoc()){
    echo  "ID: ". $row["user_id"]. "</p>";
    echo  "USERNAME: ". strtolower($row["username"]). "</p>"  ;
    echo  "PASSWORD: ". $row["password"]." </p> </br>";
  }
}

?>

</body>
</html>

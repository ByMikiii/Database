<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel= "stylesheet" href="../CSS/zoznam_style.css">
</head>
<body>
<a href="../index.php" class= "custom-button" id="home">Home</a>

<footer>Ⓒ2022 ByMikiii</footer>
<?php
require 'Connection.php';

$sql = "SELECT id, username, password, avatar FROM users";
$result = $conn->query($sql);


if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "<p style=color:white;> "."ID: ". $row["id"]. "</p>";
    echo "<p style=color:white;> USERNAME: ". $row["username"]. "</p>"  ;
    echo "<p style=color:white;> PASSWORD: ". $row["password"]." </p> </br>";
  }
}

?>

</body>
</html>

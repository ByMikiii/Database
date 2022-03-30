<?php require '../parts/header.php'; ?>

<?php
require '../php-scripts/connection.php';

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

<?php require '../parts/footer.php'; ?>
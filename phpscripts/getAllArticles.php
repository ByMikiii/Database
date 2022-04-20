<?php
include('../phpscripts/connection.php');

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
$articles = [];

while($article = $result->fetch_assoc()){
  array_push($articles, $article);
}


/*foreach ($articles as $article){
  print_r ($article);
  echo "</br>";
  print_r ($article["title"]);
}*/


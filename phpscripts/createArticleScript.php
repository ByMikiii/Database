<?php
require './connection.php';


$title = $_POST['title']; 
$autor = $_POST['autor'];
$text = $_POST['articletext'];

$sql = "INSERT INTO articles(title, autor, text) VALUES('$title', '$autor', '$text')";
if ($conn->query($sql) === TRUE) {
  header("Location: /Database/pages/articles.php?page=1");
} else {
  header("Location: /Database/pages/createArticle.php");
}
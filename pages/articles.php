<?php 
$pathToIcon = '/Images/monkaH.png';
$title = 'Articles';
include('../parts/header.php');
include('../phpscripts/connection.php');

$limitPerPage = 12;
if(!isset($_GET["page"])){
  $page = 1;
}else {
$page = $_GET["page"];
}
$offset = ($page - 1) * $limitPerPage;

$sql = "SELECT * FROM articles ORDER BY article_id DESC limit $limitPerPage OFFSET $offset";
$result = $conn->query($sql);
$articles = [];

while($article = $result->fetch_assoc()){
  array_push($articles, $article);
}
?>

  <h1 id='art-heading'>Articles</h1>
  <div class="cards">
  
  <?php foreach ($articles as $article) :  ?>
  <div class="card" >
    <img src="<?php echo $article['cover_image']?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $article['title']?></h5>
      <h6 class="card-autor"><?php echo $article['autor']?></h6>
      <p class="card-text"><?php echo $article['text']?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><?php echo $article['create_time']?></small>
    </div>
  </div>

  <?php endforeach;?>

</div>

<div id="pagination">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="/pages/articles.php?page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="/pages/articles.php?page=2">2</a></li>
    <li class="page-item"><a class="page-link" href="/pages/articles.php?page=3">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>

  <?php include('../parts/footer.php'); ?>

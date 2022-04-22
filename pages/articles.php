<?php 
include('../parts/header.php');
require '../phpscripts/getAllArticles.php';
$cislo = 1;
$startgroup = '<div class="card-group">';
$page_limit = 10;
$page = (isset($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
$offset = ($page > 1) ? ($page_limit * ($page - 1)) : 0;
?>

  <h1 id='art-heading'>Articles</h1>

  <div class="card-group">
  
  <?php foreach ($articles as $article) :  
    if($cislo % 3 == 1){
      echo $startgroup;
    }
    ?>
  <div class="card">
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
  <?php
  if($cislo % 3 == 0){
      echo "</div>";
    }
    $cislo++;
    
 endforeach;
?>
</div>
</div>

<div id="pagination">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="/Database/pages/articles.php?page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="/Database/pages/articles.php?page=2">2</a></li>
    <li class="page-item"><a class="page-link" href="/Database/pages/articles.php?page=3">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>

  <?php include('../parts/footer.php'); ?>

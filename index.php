<?php
require './php-scripts/connection.php';
include('./parts/header.php') 
?>

<main class="container">
<p class=login-info> DU Carousel </p>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./Images/dudo.jpeg" class="d-block w-100" alt="DUDO">
    </div>
    <div class="carousel-item">
      <img src="./Images/peepohappy.PNG" class="d-block w-100" alt="PEEPOHAPPY">
    </div>
    <div class="carousel-item">
      <img src="./Images/sleepin.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</main>

  <?php include('./parts/footer.php')?>

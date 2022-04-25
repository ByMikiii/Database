<?php
$pathToIcon = '/Images/monkaH.png';
$title = 'Main Page';
require './phpscripts/connection.php';
include('./parts/header.php')
?>

<main class="container">

<div style="width: 500px; margin-left: auto; margin-right: auto; margin-top: 80px;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/Images/peepohappy.jpg" class="d-block" alt="Ležiaci pes">
    </div>
    <div class="carousel-item">
      <img src="/Images/sleepin.jpeg" class="d-block" alt="Spiaci pes">
    </div>
    <div class="carousel-item">
      <img src="/Images/lying.jpg" class="d-block" alt="Ležiaci pes">
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

<h2 id='h2-welcome'>Welcome! 😘</h2>

  <?php include('./parts/footer.php')?>

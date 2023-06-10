<?php
  require_once('templates/header.php');
  require_once('lib/pdo.php'); 
?>


<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active ">
      <div class="carouselContent">
        <h2 class="fTitleSize lh-1 mb-3">Brocante et antiqutés</h2>
        <p class="lead fSize">
          Vous cherchez la pièce qui vous rappelle votre enfance? 
          L'objet ancien qui ira avec votre déco moderne? ou la pièce rare, ancienne?
          Venez chiner et trouver votre perle rare dans 500 m².            
        </p>
      </div>
        <img src="assets/images/Broc01.jpg" class="d-block w-100"  alt="Restaurant">
    </div>

    <div class="carousel-item">            
      <div class="carouselContent">      
        <h2 class="fTitleSize  lh-1 mb-3">Brocante et antiqutés</h2>
        <p class="lead fSize">
          Sur place, le plaisir de fouiller
        </p>

      </div>
      <img src="assets/images/Broc02.jpg" class="d-block w-100"  alt="Brocante">
    </div>

    <div class="carousel-item">
      <div class="carouselContent">          
        <h2 class="fTitleSize  lh-1 mb-3">Brocante et antiqutés</h2>
        <p class="lead fSize">
          Plus qu'un plaisir, une philosophie
        </p>
      </div>
      <img src="assets/images/Broc03.jpg" class="d-block w-100"  alt="brocante">
    </div>
  </div>
</div>

<?php
require_once('templates/footer.php');
?>
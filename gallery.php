<?php
  require_once('templates/header.php');
  require_once('lib/card.php');

 // $cards = getCards($pdo);
 // limit to x cards 
  $cards = getCards($pdo, _GAL_CARDS_LIMIT_);
?>
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <h1>Galerie photo</h1>
  </div>
  <div class="row">
    <?php foreach ($cards as $key => $card) {
        include('templates/card_partial.php');
      }
    ?>
  </div>

<?php
  require_once('templates/footer.php');
?>
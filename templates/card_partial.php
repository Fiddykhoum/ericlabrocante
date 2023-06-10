<?php 
require_once "./lib/tools.php"
?>

<div class="col-md-4 mt-4">
  <div class="card">
      <img src="<?=getCardImage($card['image']); ?>" 
        class="card-img-top size" 
        alt="<?= $card['title']; 
      ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $card['title']; ?></h5>
      <p class="card-text"><?= $card['content']; ?></p>
      <?php
      
        $level = getLevel();
        if ($level === 1) {                    
          if(isset($_POST[$card['id']])) {
            
            $delquery = " DELETE FROM photos WHERE photos.id = " . $card['id'] .";";
            $query = $pdo->query($delquery);
           
           ?> 
              <script language="javascript">               
                 alert ("la photo a été supprimée")
                 location.reload();            
              </script>
          <?php
           
           } ?>

          <form method="post">
            <input type="submit" class="btn btn-primary mt-4"  name="<?=$card['id']; ?>" value="Supprimer"/> 
          </form>

        <?php } ?>
      </div>
  </div>
</div> 
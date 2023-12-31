<?php

require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/photos_tools.php');

$errors = [];
$messages = [];
$menu = [
    'title' => '',
    'content' => '',
];

if (isset($_POST['saveGal'])) {
  //$res = saveGal($pdo, $_POST['title'], $_POST['content'], null);
  $filePicName = null;
  // if file sended
  if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
      // return false if file is not image
      $checkImage = getimagesize($_FILES['file']['tmp_name']);      
      if ($checkImage !== false) {
          // if the file is an image
          $filePicName = uniqid().'-'.slugify($_FILES['file']['name']);
          move_uploaded_file($_FILES['file']['tmp_name'], _CARDS_IMG_PATH_.$filePicName);
      } else {
          // if not, show error
          $errors[] = 'Le fichier doit être une image';
      }
    }

    if (!$errors) {
        $res = saveGal($pdo, $_POST['title'], $_POST['content'], $filePicName);
        
        if ($res) {
          ?> 
            <script language="javascript">               
              alert ('La carte a bien été sauvegardée')            
            </script>
          <?php
        
        } else {
          ?> 
            <script language="javascript">               
               alert ('La carte n\'a pas été sauvegardée')            
            </script>
          <?php
        }
    }
    $menu = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ];

}

$level = getLevel();

if ( $level === 1) { ?>

  <!-- ajout de cntenu -->
  <form method="POST" enctype="multipart/form-data">
    <h2 class="display-4">Ajouter photo à la galerie</h2>

      <div class="mb-3">
          <label for="title" class="form-label">Titre</label>
          <input type="text" name="title" id="title" class="form-control">
      </div>

      <div class="mb-3">
          <label for="content" class="form-label">Contenu</label>
          <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
      </div>

      <div class="mb-3">
            <label for="file" class="form-label">Uploadez une image : </label>
            <input type="file" name="file" id="file">
        </div>
      <input type="submit" value="Enregistrer" name="saveGal" class="btn btn-primary">

  </form>
    
  <?php
} else {
  ?>
    <div class="mb-3">
      <p class="alert alert-warning" role="alert">Seuls les administrateurs ont accés à cette page</p>
    </div>
    
  <?php
}
?>

<?php
  require_once('templates/footer.php');
?>
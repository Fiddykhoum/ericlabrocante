<?php
  require_once('templates/header.php');
  require_once('lib/pdo.php');
  
?>
<div class="d-flex">
  <div>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1445.709010564515!2d7.023072413171664!3d48.80212962136473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47941509ffd44321%3A0xca8e2a0df971441a!2sRue%20des%20Carri%C3%A8res%2C%2057930%20Bettborn!3m2!1d48.8020894!2d7.0243989!5e1!3m2!1sfr!2sfr!4v1686338841675!5m2!1sfr!2sfr" 
      width="600" 
      height="450" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>  
  </div>
  <div class="col-lg-6 p-3">
    <h2 class="display-5  lh-1 mb-3">Eric la brocante</h2>
    <ul class="lead">
      <li>rue des carrières</li>
      <li>57930 Bettborn</li>
      <li>EricLaBrocante@email.com</li>
    <ul>
  </div>
</div>

<?php
require_once('templates/footer.php');
?>
<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;
?>
  <h1>Questionnaires disponibles</h1>
  <?php
    $user = Sentinel::getUser();
    echo '<p>Vous êtes connecté(e) en tant que : <strong>'.$user['email'].'</strong></p>';
    makeTable($sessions, 'nom', null, null);
  ?>


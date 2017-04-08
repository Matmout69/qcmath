<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;
?>
  <h1>Bienvenue !</h1>
  <?php
    $user = Sentinel::getUser();
    echo '<p>Votre identifiant : '.$user['email'].'</p>';
    echo '<p>Dernière connexion le '.$user['last_login'].'</p>';
  ?>
  <h2>Sessions</h2>
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Professeur</th><th>Groupe</th><th>Salle</th><th>N° séance</th>
      </tr>
    </thead>
    <tbody>
        <tr><td>M. LEROUX</td>  <td>G6S2</td><td>12</td><td>1</td></tr>
        <tr><td>Mme JOUBERT</td><td>G6S3</td><td>13</td><td>2</td></tr>
        <tr><td>M. JALOUX</td>  <td>G6S4</td><td>14</td><td>3</td></tr>
    </tbody>
  </table>
  <h2>Entraînements</h2>
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Professeur</th><th>Groupe</th><th>Salle</th><th>N° séance</th>
      </tr>
    </thead>
    <tbody>
        <tr><td>M. LEROUX</td>  <td>G6S2</td><td>12</td><td>1</td></tr>
        <tr><td>Mme JOUBERT</td><td>G6S3</td><td>13</td><td>2</td></tr>
        <tr><td>M. JALOUX</td>  <td>G6S4</td><td>14</td><td>3</td></tr>
    </tbody>
  </table>

</div>
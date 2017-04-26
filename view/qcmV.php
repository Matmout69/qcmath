<div id="container">
      <h1>Gestion des QCMs</h1>
          <h2>Rechercher / modifier des questions</h2>
              <section class="col-md-4">
              <form action="index.php?page=qcm" method="post">
                  <div class="form-group">
                  <p>Chercher toutes les questions dans la base</p>
                  <input name="all" class="btn btn-primary" type="submit" value="Afficher toutes les questions"/>
                  </div>
              </form>
              </section>

              <section class="col-md-4">
              <form action="index.php?page=qcm" method="post">
                 <div class="form-group">
                 <p>Rechercher les questions d'un chapitre : </p>
                     <?php makeSelect($chapitres, 'chapitres', 'nom') ?>
                 <input type="submit" class="btn btn-primary" value="Rechercher"/>
                 </div>
              </form>
              </section>

              <section class="col-md-4">
              <form action="index.php?page=qcm" method="post">
                 <div class="form-group">
                 <p>Rechercher les questions pour une notion : </p>
                     <?php makeSelect($notions, 'notions', 'nom') ?>
                 <input type="submit" class="btn btn-primary" value="Rechercher"/>
                 </div>
              </form>
              </section>

              <p>Pour modifier une question, trouvez-la à l'aide de la recherche.</p>

              <?php
                  if ($qs != null) {
                      echo '<h2>Résultats de la recherche</h2>';
                      foreach ($qs as $q) {
                          printQuestion($q, true);
                          //echo '<pre>';
                          //print_r($q);
                          //echo '</pre>';
                      }
                  }
              ?>
</div>

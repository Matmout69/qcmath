
  <body>

    <div class="container">

      <form class="form-signin" action="?page=signin" method="post">
        <h1 class="form-signin-heading">QCM de maths</h2>
        <h2 class="form-signin-heading">Se connecter</h2>
        
        <label for="inputEmail" class="sr-only">Adresse e-mail</label>
        <input name="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" autofocus>
        
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Mot de passe">
        <p class="failed">
          <?php
            if (isset($signinRes) && $signinRes == false)  {
              echo 'Connexion refusée';
            }
          ?>
        </p>
        <div class="checkbox">
          <label>
            <input name="remember" type="checkbox" value="yes"> Se souvenir de moi
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>

    </div> <!-- /container -->
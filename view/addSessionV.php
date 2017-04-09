
      <div id="tabSession" class="container">
        <ul class="nav nav-pills">
        <li id="tab-aleatoire" class="active">
          <a  href="#tabAleatoire" data-toggle="tab">Aléatoire</a>
        </li>
        <li id="tab-predefinis" ><a href="#tabPredef" data-toggle="tab">Prédéfinis</a>
        </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="tabAleatoire">
            <div class="alert alert-info">
              <strong>Choisir un chapitre et une notion</strong>
            </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="liste-chapitre">
                    <div id="listeChapitre" class="list-group">
                      <a href="#" class="list-group-item">Chapitre 1</a>
                      <a href="#" class="list-group-item">Chapitre 2</a>
                      <a href="#" class="list-group-item">Chapitre 3</a>
                      <a href="#" class="list-group-item">Chapitre 4</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="liste-notion">
                    <div id="listeNotion" class="list-group">
                      <a href="#" class="list-group-item">Notion 1</a>
                      <a href="#" class="list-group-item">Notion 2</a>
                      <a href="#" class="list-group-item">Notion 3</a>
                      <a href="#" class="list-group-item">Notion 4</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="alert alert-info">
              <strong>Choisir un nombre de question et définir un mot de passe</strong>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <input id="nbq" type="text" class="form-control" placeholder="Nombre de questions">
              </div>
              <div id="mdp" class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Mot de passe" data-toggle="password">
              </div>
            </div>
            <div class="col-sm-12">
              <div id="btlancerSe">
                <button id="btn-lancer" type="button" class="btn btn-primary btrejoindre disabled">Lancer la session</button>
              </div>
            </div>
            </div>
          <div class="tab-pane" id="tabPredef">
            <div class="alert alert-info">
              <strong>Choisir un chapitre et une notion</strong>
            </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="liste-chapitre">
                    <div id="listeChapitre" class="list-group">
                      <a href="#" class="list-group-item">Chapitre 1</a>
                      <a href="#" class="list-group-item">Chapitre 2</a>
                      <a href="#" class="list-group-item">Chapitre 3</a>
                      <a href="#" class="list-group-item">Chapitre 4</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="liste-notion">
                    <div id="listeNotion" class="list-group">
                      <a href="#" class="list-group-item">Notion 1</a>
                      <a href="#" class="list-group-item">Notion 2</a>
                      <a href="#" class="list-group-item">Notion 3</a>
                      <a href="#" class="list-group-item">Notion 4</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="alert alert-info">
              <strong>Ajouter des questions et définir un mot de passe</strong>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="search form-control"  placeholder="Rechercher..." >
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
              </div>
            </div>
            <div id="counter" class="pull-left">
              <span class="counter"></span>
            </div>
          </br>

            <div class="col-sm-12 recherche">
              <table class="table table-hover table-striped results">
                <thead>
                  <tr>
                    <th class="col-xs-11">Questions</th>
                    <th class="col-xs-1">Ajouter</th>
                  </tr>
                  <tr class="warning no-result">
                    <td colspan="4"><i class="fa fa-warning"></i>Pas de résulat</td>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-success "><strong>+</strong></button></td>
                  </tr>
                  <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-success "><strong>+</strong></button></td>
                  </tr>
                  <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-success "><strong>+</strong></button></td>
                  </tr>
                  <tr>
                    <td>Lorem Hello World ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-success "><strong>+</strong></button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-12 addedquestions">
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th class="col-xs-11">Questions ajoutées (4)</th>
                    <th class="col-xs-1">Supprimer</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-danger "><strong>-</strong></button></td>
                  </tr>
                  <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-danger "><strong>-</strong></button></td>
                  </tr>
                  <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-danger "><strong>-</strong></button></td>
                  </tr>
                  <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim lorem, congue sit amet est vel, tincidunt malesuada odio.</td>
                    <td><button type="button" class="btn btn-danger "><strong>-</strong></button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div id="mdpEntr" class="col-sm-12">
              <input type="password" class="form-control" id="password" placeholder="Mot de passe" data-toggle="password">
            </div>
            <div class="col-sm-12">
              <div id="btlancerSe">
                <button id="btn-lancer" type="button" class="btn btn-primary btrejoindre disabled">Lancer la session</button>
              </div>
            </div>
            </div>
        </div>
      </div>

    </div>


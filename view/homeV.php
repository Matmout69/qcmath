  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav id="menu" class="navbar navbar-default ">
        <div class="container-fluid">
          <div id="barreMenu" class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="titreMenu" class="navbar-brand" href="#"><strong>QCM de Maths</strong></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Sessions</a></li>
              <li><a href="#">Profil</a></li>
              <li><a href="#">Classement</a></li>
              <li><a href="#">Statistiques</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="hidden-lg hidden-md hidden-sm">Déconnexion</span><span class="glyphicon glyphicon-off hidden-xs"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


      <div id="tabSession" class="container">
        <ul class="nav nav-pills">
        <li class="active">
          <a  href="#tabSessions" data-toggle="tab">Sessions</a>
        </li>
        <li><a href="#tabEnt" data-toggle="tab">Entrainements</a>
        </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="tabSessions">
            <div class="liste-sessions">
              <div class="list-group">
                <div class="row">
                  <div class="col-xs-4"><p>Professeur</p></div>
                  <div class="col-xs-3"><p>Groupe</p></div>
                  <div class="col-xs-2"><p>Salle</p></div>
                  <div class="col-xs-3"><p>N&#176 séance</p></div>
                </div>
                <a href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-xs-4 rowborder">M. LEROUX</div>
                    <div class="col-xs-3 rowborder">G6S4</div>
                    <div class="col-xs-2 rowborder">210</div>
                    <div class="col-xs-3">4</div>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-xs-4 rowborder">Mme JOUBERT</div>
                    <div class="col-xs-3 rowborder">G6S3</div>
                    <div class="col-xs-2 rowborder">210</div>
                    <div class="col-xs-3 ">4</div>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-xs-4 rowborder">M. JALOUX</div>
                    <div class="col-xs-3 rowborder">G6S1</div>
                    <div class="col-xs-2 rowborder">210</div>
                    <div class="col-xs-3 ">4</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabEnt">
            <div class="list-Entr">
              <div class="list-group">
                <div class="row">
                  <div class="col-xs-5"><p>Chapitre</p></div>
                  <div class="col-xs-4"><p>Date</p></div>
                  <div class="col-xs-3"><p>N&#176 séance</p></div>
                </div>
                <a href="#"class="list-group-item">
                  <div class="row">
                    <div class="col-xs-5 rowborder">Probabilités-CH1</div>
                    <div class="col-xs-4 rowborder">31/12/2015</div>
                    <div class="col-xs-3">3</div>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-xs-5 rowborder">Analyse-CH3</div>
                    <div class="col-xs-4 rowborder">21/12/2012</div>
                    <div class="col-xs-3">4</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="rejoindre">
        <button id="btn-rejoindre" type="button" class="btn btn-primary btrejoindre disabled">Rejoindre</button>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>
  </body>
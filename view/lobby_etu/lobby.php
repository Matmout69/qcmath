<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <title>QCM de Maths</title>

    <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

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
                    <div class="col-xs-4 rowborder">TARTEMPION</div>
                    <div class="col-xs-3 rowborder">G6S3</div>
                    <div class="col-xs-2 rowborder">210</div>
                    <div class="col-xs-3">4</div>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-xs-4 rowborder">TARTEMPION</div>
                    <div class="col-xs-3 rowborder">G6S3</div>
                    <div class="col-xs-2 rowborder">210</div>
                    <div class="col-xs-3 ">4</div>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-xs-4 rowborder">TARTEMPION</div>
                    <div class="col-xs-3 rowborder">G6S3</div>
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
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="lobby.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

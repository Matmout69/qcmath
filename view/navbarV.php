<!-- Barre de navigation -->
<body>
<div class="container">
    <nav id="menu" class="navbar navbar-default ">
    <div class="container-fluid">
        <div id="barreMenu" class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a id="titreMenu" class="navbar-brand" href="#">Questions de maths</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <?php
            if (isset($_GET['page'])) {
                $pgname = $_GET['page'];
            } else { $pgname = '';}
            ?>
            <li class="<?php if($pgname == 'home' || $pgname == '') echo 'active'; ?>"><a href="index.php?page=home">Sessions</a></li>
            <li class="<?php if($pgname == 'qcm') echo 'active'; ?>"><a href="index.php?page=qcm">QCM</a></li>
            <li class="<?php if($pgname == 'addSession') echo 'active'; ?>"><a href="index.php?page=addSession">Nouvelle session</a></li>
            <li><a href="index.php?page=logout">Se déconnecter</a></li>
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
    </nav>
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
        <a id="titreMenu" class="navbar-brand" href="index.php">λ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <?php
            if (isset($_GET['page'])) {
                $pgname = $_GET['page'];
            } else { $pgname = '';}
            ?>
            <li class="<?php if($pgname == 'home' || $pgname == '') echo 'active'; ?>"><a href="index.php?page=home">Participer</a></li>
            <li><a href="index.php?page=logout">Se déconnecter</a></li>
        </ul>
        </div><!--/.nav-collapse -->

    </div><!--/.container-fluid -->
    </nav>

    <nav id="menu-adm" class="navbar navbar-default ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-adm" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">(Administrer)</span>
            </div>
            <div id="navbar-adm" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php
                    if (isset($_GET['page'])) {
                        $pgname = $_GET['page'];
                    } else { $pgname = '';}
                    ?>
                    <li class="<?php if($pgname == 'users') echo 'active'; ?>"><a href="index.php?page=users">Utilisateurs</a></li>
                    <li class="<?php if($pgname == 'chpnot') echo 'active'; ?>"><a href="index.php?page=chpnot">Chapitres/Notions</a></li>
                    <li class="<?php if($pgname == 'qcm') echo 'active'; ?>"><a href="index.php?page=qcm">Questions</a></li>
                    <li class="<?php if($pgname == 'addqcm') echo 'active'; ?>"><a href="index.php?page=addqcm">Nouvelle Question</a></li>
                    <li class="<?php if($pgname == 'sessions') echo 'active'; ?>"><a href="index.php?page=sessions">Sessions</a></li>
                    <li class="<?php if($pgname == 'addsession') echo 'active'; ?>"><a href="index.php?page=addsession">Nouvelle Session</a></li>
                    <li class="<?php if($pgname == 'testmath') echo 'active'; ?>"><a href="index.php?page=testmath">Testeur LATEX</a></li>
                </ul>
                </ul>
            </div><!--/.nav-collapse -->

        </div><!--/.container-fluid -->
    </nav>

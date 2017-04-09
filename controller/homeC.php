<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;

    // Si l'utilisateur n'est pas connecté, le rediriger sur la page de connexion
    if ($user = Sentinel::guest()) {
        header('Location: index.php?page=signin');
    }

    $reqStylesheet = 'css/general.css';
    $pageName = 'Sessions';
    $needsMath = false;
    require 'view/htmlhead.php';
    require 'view/navbarV.php';
    require 'view/homeV.php';
    require 'view/htmlfooter.php';
<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;

    // Si l'utilisateur n'est pas connecté, le rediriger sur la page de connexion
    if ($user = Sentinel::guest()) {
        header('Location: index.php?page=signin');
    }

    $reqStylesheet = 'css/general.css';
    $pageName = 'Nouvelle session';
    require 'view/htmlhead.php';
    require 'view/navbarV.php';
    require 'view/addSessionV.php';
    require 'view/htmlfooter.html';
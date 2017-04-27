<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;

    // Si l'utilisateur n'est pas connecté, le rediriger sur la page de connexion
    if ($user = Sentinel::guest()) {
        header('Location: index.php?page=signin');
    }

    $reqStylesheets = array('css/general.css');
    $pageName = 'Sessions';
    require 'view/header.php';
    require 'view/navigation.php';


    require 'model/sessionsM.php';
    $sessions = getSessions();
    require 'view/homeV.php';

    require 'view/footer.php';
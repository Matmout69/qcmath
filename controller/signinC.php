<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;
    $needsMath = false;

    /*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    */

    // Vérifier si l'utilisateur a réussi à s'authentifier précédemment pour le rediriger
    if (Sentinel::check()) {
        header('Location: index.php?page=home');
    }

    if (isset($_POST['email']) && isset($_POST['pwd'])) {
        if (isset($POST['remember'])) {
            $rem = true;
        }
        $rem = false;
        // Authentifier l'utilisateur
        $signinRes = Sentinel::authenticate(array(
        'email'    => $_POST['email'],
        'password' => $_POST['pwd'],
        ), $rem);
        // Rediriger l'utilisateur si l'authentification a réussi
        if (Sentinel::check()) {
            header('Location: index.php?page=home');    
        }
    }

    $reqStylesheets = array('css/signin.css', 'css/general.css');
    $pageName = 'Connexion';
    require 'view/htmlhead.php';
    require 'view/signinV.php';
    require 'view/htmlfooter.php';
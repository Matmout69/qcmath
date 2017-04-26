<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;

// Si l'utilisateur n'est pas connecté, le rediriger sur la page de connexion
if ($user = Sentinel::guest()) {
    header('Location: index.php?page=signin');
}

// Ajouter un utilisateur si demandé
if (isset($_POST['email'])) {
    if (!isset($_POST['bipcode'])) {
        $pass = '';
    } else {
        $pass = $_POST['bipcode'];
    }
    Sentinel::register(array(
        'email'    => $_POST['email'],
        'password' => $pass,
    ));
}

// Supprimer un utilisateur si demandé
if (isset($_POST['delemail'])) {
    $user = Sentinel::findByCredentials(array('login' => $_POST['delemail']));
    // Vérifier si l'utilisateur n'essaie pas de d'autosupprimer
    $me = Sentinel::getUser();
    if ($me['email'] === $user['email']) {
        // Signaler une erreur
    }
    else if ($user != null) {
        $user->delete();
    }
}

// Dans tous les cas, récupérer la liste des utilisateurs
require 'model/usersM.php';
$users = getUsers();

$reqStylesheets = array('css/general.css');
$pageName = 'Utilisateurs';
require 'view/header.php';
require 'view/navigation.php';

require 'view/usersV.php';

require 'view/footer.php';
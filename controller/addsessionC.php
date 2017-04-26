<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;

// Si l'utilisateur n'est pas connecté, le rediriger sur la page de connexion
if ($user = Sentinel::guest()) {
    header('Location: index.php?page=signin');
}

$reqStylesheets = array('css/general.css');
$pageName = 'Nouvelle session';
require 'view/header.php';
require 'view/navigation.php';

require 'model/addsessionM.php';
// Ajouter une session si demandé
if (isset($_POST['sessionname'][1])) {
   ajouterSession($_POST['sessionname'], $_POST['sessiontime']);
}

require 'view/addsessionV.php';
require 'view/footer.php';
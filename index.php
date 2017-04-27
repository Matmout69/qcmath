<?php
// Application qcmath - Point d'entrée

// Charger les dépendances
require './vendor/autoload.php';
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Database\Capsule\Manager as Capsule;

// Instancier une capsule Eloquent (pour Sentinel)
$capsule = new Capsule;

// Connecter Sentinel à la BDD
$capsule->addConnection(
    [
    'driver'    => 'sqlite',
    'database'  => __DIR__.'/database/production.sqlite',
    'prefix'    => ''
    ]
);
$capsule->bootEloquent();

// Se connecter à la BDD
require('./lib/db.php');
$db = new DB();
// Charger les fonctions utilitaires
require('./lib/util.php');

// Vérifie si une route est valide
function checkRoute($route) {
    /* Note : pour éviter de confondre les fichiers, les contrôleurs 
       sont suffixés d'un C, les modèles d'un M, et les vues d'un V*/
    return (preg_match("/^[a-z]+$/i", $route) === 1) && 
    (file_exists('controller/'.$route.'C.php'));
}

// NOTE: Toute requête envoyée au serveur démarre ici

// Désactiver les checkpoints Sentinel (activation du compte)
Sentinel::disableCheckpoints();

// Routage vers la page demandée en paramètres de l'URL
if (isset($_GET['page'])) {
    if (checkRoute($_GET['page'])) {
        // La route est bonne
        require 'controller/'.$_GET['page'].'C.php';
    } else {
        // La route n'est pas bonne
        require 'controller/notfoundC.php';
    }
} else {
    // Aucune route demandée : envoyer sur la page d'accueil
    require 'controller/homeC.php';
}


<?php
// Application qcmath - Point d'entrée

// Charger les dépendances
require './vendor/autoload.php';

// Vérifie si une route est valide
function checkRoute($route) {
    /* Note : pour éviter de confondre les fichiers, les contrôleurs 
       sont suffixés d'un C, les modèles d'un M, et les vues d'un V*/
    return (preg_match("/^[a-z]+$/i", $route) === 1) && 
    (file_exists('controller/'.$route.'C.php'));
}

// NOTE: Toute requête envoyée au serveur démarre ici

// Routage vers la page demandée en paramètres de l'URL
$requestedRoute = $_GET['page'];
if (isset($requestedRoute)) {
    if (checkRoute($requestedRoute)) {
        // La route est bonne
        require 'controller/'.$requestedRoute.'C.php';
    } else {
        // La route n'est pas bonne
        require 'controller/notfoundC.php';
    }
} else {
    // Aucune route demandée : envoyer sur la page d'accueil
    require 'controller/homeC.php';
}

?>
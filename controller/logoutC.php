<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;

    // Déconnecter l'utilisateur et le renvoyer sur la page de connexion
    Sentinel::logout();
    header('Location: index.php?page=signin');
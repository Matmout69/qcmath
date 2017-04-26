<?php
    $reqStylesheets = array('css/general.css');
    $pageName = 'Questions';
    require 'view/header.php';
    require 'view/navigation.php';

    require 'model/qcmM.php';
    require 'model/chpnotM.php';
    $chapitres = getChapitres();
    $notions = getNotions();

    // Récupérer toutes les questions si demandé
    $qs = null;
    if (isset($_POST['all'])) {
        $qs = getQuestions(array());
    }
    // Récupérer les questions d'un chapitre si demandé
    else if (isset($_POST['chapitres'])) {
       $qs = getQuestions(array('chapitre' => $_POST['chapitres']));
    }
    // Récupérer les question d'une notion si demandé
    else if (isset($_POST['notions'])) {
        $qs = getQuestions(array('notion' => $_POST['notions']));
    }
    // Supprimer une question si demandé
    else if (isset($_POST['del'])) {
        delQuestion($_POST['del']);
    }

    require 'view/qcmV.php';
    require 'view/footer.php';
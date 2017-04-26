<?php
$reqStylesheets = array('css/general.css');
$pageName = 'Chapitres / Notions';
require 'view/header.php';
require 'view/navigation.php';

require 'model/chpnotM.php';

// Ajouter un chapitre si demandé
if (isset($_POST['chpname'])) {
    addChapitre($_POST['chpname']);
}

// Ajouter une notion si demandé
if (isset($_POST['notionname'])) {
    addNotion($_POST['notionname']);
}

$chapitres = getChapitres();
$notions = getNotions();

require 'view/chpnotV.php';
require 'view/footer.php';
<?php
$reqStylesheets = array('css/general.css');
$pageName = 'Nouvelle Question';
require 'view/header.php';
require 'view/navigation.php';

// Création de la question si demandé
// On utilise isset(...[1]) car le champ peut être set mais 'null'
if (isset($_POST['questiontext'][1]) && isset($_POST['item'][0])) {
    $texte = $_POST['questiontext'];
    $justif = $_POST['justiftext'];
    $chapitre = $_POST['chapitres'];
    $notion = $_POST['notions'];
    $items = $_POST['item'];

    // Déterminer quelles cases ont été cochées
    $nb = count($items);
    $est_juste = array_fill(0, $nb, false);
    foreach ($_POST['cb'] as $val) {
        $est_juste[$val] = true;
    }

    require 'model/addqcmM.php';
    addQuestion($texte, $justif, $chapitre, $notion, $items, $est_juste);
}

require 'model/chpnotM.php';
$chapitres = getChapitres();
$notions = getNotions();

require 'view/addqcmV.php';
require 'view/footer.php';
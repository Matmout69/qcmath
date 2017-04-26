<?php
$reqStylesheets = array('css/general.css');
$pageName = 'Testeur LATEX';
require 'view/header.php';
require 'view/navigation.php';

if (isset($_POST['saisie'][1])) {
   $saisie = $_POST['saisie'];
} else {
    $saisie = '';
}
require 'view/testmathV.php';

require 'view/footer.php';
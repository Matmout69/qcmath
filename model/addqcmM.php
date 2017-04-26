<?php

function lierNotion($id_qu, $notion) {
   global $db;
   if($notion !== 'none') {
       $idnoReq = "SELECT id FROM notion WHERE nom=:nomnotion";
       $db->queryRow($idnoReq, array('nomnotion' => $notion));
       $id_no = $db->_data['id'];
       $noReq = "INSERT INTO lier_no values (:idno, :idqu);";
       $db->updateRow($noReq, array('idno' => $id_no, 'idqu' => $id_qu));
   }
}

function lierChapitre($id_qu, $chapitre) {
   global $db;
   // L'id d'insertion est généré automatiquement par sqlite, il faut le récupérer ensuite
   $chIdReq = "SELECT id FROM chapitre WHERE nom=:lenom";
   $db->queryRow($chIdReq, array('lenom' => $chapitre));
   $id_ch = $db->_data['id'];
   $chapitreReq = "INSERT INTO lier_ch values (:idch, :idqu);";
   $db->updateRow($chapitreReq, array('idch' => $id_ch, 'idqu' => $id_qu));
}

// Ajoute ET LIE des items
function ajouterItems($items, $id_qu, $est_juste) {
   global $db;
   $itReq = "INSERT INTO item(texte) values (:texte);";
   $lierReq = "INSERT INTO lier_it VALUES (:idit, :idqu, :estjuste);";
   for ($i = 0; $i < count($items); $i++) {
       $db->updateRow($itReq, array('texte' => $items[$i]));
       $id_it = $db->getLastId();
       $db->updateRow($lierReq, array('idit' => $id_it, 'idqu' => $id_qu, 'estjuste' => $est_juste[$i]));
   }
}

function addQuestion($texte, $justif, $chapitre, $notion, $items, $est_juste) {
   global $db;
   // Insertion dans question
   $questionReq = "INSERT INTO question(texte, type, justif) VALUES (:texte, 1, :justif);";
   $db->updateRow($questionReq, array('texte' => $texte, 'justif' => $justif));
   // Liaison avec chapitre et notion
   $id_qu = $db->getLastId();
   lierChapitre($id_qu, $chapitre);
   lierNotion($id_qu, $notion);
   // Ajout des items
   ajouterItems($items, $id_qu, $est_juste);
}

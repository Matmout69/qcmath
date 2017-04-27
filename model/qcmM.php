<?php

// Supprimer une question
function delQuestion($id) {
    global $db;
    // Suppression des items avec liaison
    $r = "DELETE FROM item WHERE id = :idit";
    $rl = "DELETE FROM lier_it WHERE  id_it = :idit";
    $items = getItems($id);
    foreach ($items as $item) {
        $db->updateRow($r, array('idit' => $item['id']));
        $db->updateRow($rl, array('idit' => $item['id']));
    }
    // Suppression liaison chapitre
    $r = "DELETE FROM lier_ch WHERE id_qu = :idqu";
    $db->updateRow($r, array('idqu' => $id));
    // Suppression laison notions
    $r = "DELETE FROM lier_no WHERE id_qu = :idqu";
    $db->updateRow($r, array('idqu' => $id));
}

// Récupérer les items d'une question
function getItems($id) {
   global $db;
    $itR = "SELECT i.id, i.texte, l.est_juste
               FROM item i
               INNER JOIN lier_it l ON l.id_it = i.id
               WHERE l.id_qu = :idq";
    $db->queryArray($itR, array('idq' => $id));
    return $db->_data;
}

// On peut faire bien mieux que ça avec un peu de "plomberie"
function getQuestions($filter) {
    global $db;
    $r = "SELECT q.id, texte, justif, nom AS nomchapitre
          FROM question q
          INNER JOIN lier_ch l ON l.id_qu = q.id
          INNER JOIN chapitre c ON c.id = l.id_ch";
    if (isset($filter['chapitre'])) {
        $r = $r." WHERE c.nom = :nomchp";
        $db->queryArray($r, array('nomchp' => $filter['chapitre']));
    } else {
        $db->queryArray($r, array());
    }
    $retqs = $db->_data;

    $questions = array();
    foreach ($retqs as $q) {
       // Récupérer les notions
       $noR = "SELECT nom
               FROM notion n
               INNER JOIN lier_no l ON l.id_no = n.id
               WHERE l.id_qu = :idq;";
       $db->queryArray($noR, array('idq' => $q['id']));
       // Filtrage par notion
       if (isset($filter['notion'])) {
           if (!in_array($filter['notion'], $db->_data[0], true)) {
               continue;
           }
       }
       $q = array_merge($q, array('notions' => $db->_data));

       $items = getItems($q['id']);
       $q = array_merge($q, array('items' => $items));

       array_push($questions, $q);
    }

    return $questions;
}


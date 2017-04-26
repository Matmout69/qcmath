<?php

function getChapitres() {
    global $db;
    $req = "SELECT nom FROM chapitre";
    $db->queryArray($req, array());
    return $db->_data;
}

function addChapitre($nom) {
    global $db;
    $req = "INSERT INTO chapitre(nom) VALUES (:chpname);";
    $db->updateRow($req, array('chpname' => $nom));
}

function getNotions() {
    global $db;
    $req = "SELECT nom FROM notion";
    $db->queryArray($req, array());
    return $db->_data;
}

function addNotion($nom) {
    global $db;
    $req = "INSERT INTO notion(nom) VALUES (:notionname);";
    $db->updateRow($req, array('notionname' => $nom));
}
<?php

function ajouterSession($name, $timer) {
   global $db;
   $r = "INSERT INTO session (nom, timer) values (:sname, :stimer)";
   $db->updateRow($r, array('sname' => $name, 'stimer' => $timer));
}
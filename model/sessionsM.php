<?php

function getSessions() {
    global $db;
    $r = "SELECT * from session";
    $db->queryArray($r, array());
    return $db->_data;
}

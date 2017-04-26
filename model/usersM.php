<?php

function getUsers() {
    global $db;
    $req = "SELECT email FROM users";
    $db->queryArray($req, array());
    return $db->_data;
}
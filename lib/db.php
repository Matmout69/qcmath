<?php
class DB {
    private $_db;
    public $_data;
    public $_rowcount;

    function __construct() {
        // Connexion à la base de données
        try {
            $dbname = './database/production.sqlite';
            $this->_db = new PDO('sqlite:'.$dbname);
        }
        catch (PDOException $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    public function __destruct() {
        $this->_db = null;
    }

    // Récupérer l'id dernière insertion
    public function getLastId() {
        return $this->_db->lastInsertId();
    }

    //Mettre à jour une ligne
    public function updateRow($query, $params) {
        try {
            $prepStmt = $this->_db->prepare($query);
            $prepStmt->execute($params);
        }
        catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    // Récupérer un ensemble de lignes  (selon la requête passée en paramètre)
    public function queryArray($query, $params = array()) {
        try {
            $prepStmt = $this->_db->prepare($query);
            $prepStmt->execute($params);

            $this->_data = $prepStmt->fetchAll();
            $this->_rowcount = count($this->_data);
        }
        catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    // Récupérer une seule ligne (selon la requête passée en paramètre)
    public function queryRow($query, $params = array()) {
        try {
            $prepStmt = $this->_db->prepare($query);
            $prepStmt->execute($params);

            $this->_data= $prepStmt->fetch();
            $this->_rowcount = count($this->_rowcount);
        }
        catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
}
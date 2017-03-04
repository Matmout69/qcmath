<?php
/**
 * Point d'entrée de l'application
 * PHP version 7
 *
 * @category None
 * @package  None
 * @author   mannk <mannk@github.com>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     github.com/mannk/qcmath
 */

require './vendor/autoload.php'; // Chargement des bibliothèques externes (Composer)
require 'routing.php'; // Logique de routage

handleRoutes(); // Traiter les requêtes entrantes

?>

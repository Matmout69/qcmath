<?php
/**
 * Point d'entrée de l'application
 * PHP version 7
 *
 * @category None
 * @package  QCMath
 * @author   mannk <mannk@github.com>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     github.com/mannk/qcmath
 */

namespace QCMath;

// Pour Sentinel
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Database\Capsule\Manager as Capsule;

require './vendor/autoload.php'; // Chargement des bibliothèques externes (Composer)
require './lib/routing.php'; // Logique de routage

handleRoutes(); // Traiter les requêtes entrantes

// Setup a new Eloquent Capsule instance
$capsule = new Capsule;

$capsule->addConnection(
    [
    'driver'    => 'sqlite',
    'database'  => __DIR__.'/database/production.sqlite',
    'prefix'    => ''
    ]
);

$capsule->bootEloquent();

// Register a new user
/*Sentinel::register(
    [
    'email'    => 'test@example.com',
    'password' => 'foobar',
    ]
);*/

$user = Sentinel::findById(1);

echo "<pre>";
print_r($user);
echo "</pre>";

?>

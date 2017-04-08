
// Déclaration de modules : Sentinel
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Database\Capsule\Manager as Capsule;

require './vendor/autoload.php'; // Bibl. chargées avec Composer
require './/routing.php'; // Routeur

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
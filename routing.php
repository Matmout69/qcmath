<?php
/**
 * Routage : traiter les requêtes html
 * PHP version 7
 *
 * @category None
 * @package  None
 * @author   mannk <mannk@github.com>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     github.com/mannk/qcmath
 */

/**
 * Function name
 *
 * @return nothing
 */
function fonctionTest()
{
    echo 'i am here !!!';
}

/**
 * Fonction principale
 *
 * @return nothing
 */
function handleRoutes()
{
    // Ajout des routes
    $dispatcher = FastRoute\simpleDispatcher(
        function (FastRoute\RouteCollector $r) {
            $r->addRoute('GET', '/test', 'fonctionTest');
        }
    );

    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    // Enlever les paramètres de l'URL (?foo=bar) et la décoder
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
    switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
            echo 'not found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            echo 'method not allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            // ... call $handler with $vars
            call_user_func($handler);
        break;
    }
}

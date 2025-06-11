<?php

use \core\Router;
use Core\Helpers;

require_once __DIR__ . '/../core/Helpers.php';

Helpers::loadEnv(__DIR__ . '/../.env');

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'function.php';

spl_autoload_register( function($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require basePath("{$class}.php");
});

$router = new Router;

$routes = require basePath('routes/web.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
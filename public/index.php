<?php

use \core\Router;
use Core\Helpers;

session_start();

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'core/Helpers.php';

Helpers::loadEnv(BASE_PATH . '.env');

require BASE_PATH . 'function.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require basePath("{$class}.php");
});

$routes = require basePath('routes/web.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

Router::route($uri, $method);

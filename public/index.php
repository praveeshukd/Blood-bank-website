<?php
session_start();

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'core/function.php';
spl_autoload_register(function ($class) {

    // directory '\'change
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");

});
require base_path('bootstrape.php');
// require base_path('core/router.php');
$router = new \core\Router();
$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = ($_POST['_method']) ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);
<?php

session_start();
const BASE_PATH = __DIR__ . '/../';
if (file_exists("../Core/functions.php")) {
    require "../Core/functions.php";
} else {
    echo "Functions File Not Found";
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once basePath($class . '.php');
});


require(BASE_PATH . 'bootstrap.php');

$router = new Core\Router();
$routes = require(BASE_PATH . "routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);

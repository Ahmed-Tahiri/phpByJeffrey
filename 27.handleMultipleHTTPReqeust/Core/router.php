<?php

namespace Core;

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require_once BASE_PATH . "routes.php";


function redirectToController($url, $routesArr)
{
    if (array_key_exists($url, $routesArr)) {
        require_once  BASE_PATH . $routesArr[$url];
    } else {
        abort(404);
    }
}

redirectToController($uri, $routes);

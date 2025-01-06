<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = require_once "routes.php";


function redirectToController($url, $routesArr)
{
    if (array_key_exists($url, $routesArr)) {
        require_once  $routesArr[$url];
    } else {
        abort(404);
    }
}

redirectToController($uri, $routes);

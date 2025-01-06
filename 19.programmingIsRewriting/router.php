<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
    '/' =>   'controllers/home.php',
    '/home' =>   'controllers/home.php',
    '/about' =>   'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' =>   'controllers/contact.php',
];

// Method 2:
function redirectToController($url, $routesArr)
{
    if (array_key_exists($url, $routesArr)) {
        require_once  $routesArr[$url];
    } else {
        abort(404);
    }
}

redirectToController($uri, $routes);

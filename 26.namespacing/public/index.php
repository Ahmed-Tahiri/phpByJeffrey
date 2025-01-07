<?php

const BASE_PATH = __DIR__ . '/../';
if (file_exists("../Core/functions.php")) {
    require "../Core/functions.php";
} else {
    echo "Functions File Not Found";
}

// $config = require_once(basePath("config.php"));

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once basePath($class . '.php');
});
if (file_exists(basePath("Core/router.php"))) {
    require(basePath("Core/router.php"));
} else {
    echo "Router File Not Found";
}

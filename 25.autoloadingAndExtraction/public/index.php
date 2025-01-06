<?php
const BASE_PATH = __DIR__ . "/../";
if (file_exists("../functions.php")) {
    require "../functions.php";
} else {
    echo "Functions File Not Found";
}

// $config = require_once(basePath("config.php"));

spl_autoload_register(function ($class) {
    require_once basePath('Core/' . $class . '.php');
});
if (file_exists(basePath("router.php"))) {
    require(basePath("router.php"));
} else {
    echo "Router File Not Found";
}

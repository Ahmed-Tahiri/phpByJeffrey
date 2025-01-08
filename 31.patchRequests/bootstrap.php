<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();
App::setContainer($container);
App::bind('Core\Database', function () {
    $config = require(basePath('config.php'));
    return new Database($config['database'], 'root', 'Ahmed1682&9');
});

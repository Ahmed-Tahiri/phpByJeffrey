<?php
if (file_exists("functions.php")) {
    require "functions.php";
} else {
    echo "Functions File Not Found";
}
$config = require_once "config.php";
if (file_exists("Database.php")) {
    require_once "Database.php";
} else {
    echo "Database File Not Found";
}
if (file_exists("router.php")) {
    require "router.php";
} else {
    echo "Router File Not Found";
}
if (file_exists("Response.php")) {
    require "Response.php";
} else {
    echo "Response File Not Found";
}

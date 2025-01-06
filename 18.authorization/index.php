<?php
if (file_exists("functions.php")) {
    require "functions.php";
} else {
    echo "Functions File Not Found";
}
if (file_exists("router.php")) {
    require "router.php";
} else {
    echo "Router File Not Found";
}

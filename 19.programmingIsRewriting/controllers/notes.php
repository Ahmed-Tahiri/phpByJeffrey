<?php
$config = require_once "config.php";
if (file_exists("Database.php")) {
    require_once "Database.php";
} else {
    echo "Database File Not Found";
}
$heading = "Notes";
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$query = "SELECT * FROM `notes`;";
$notes = $db->query($query)->get();
require "views/notes.view.php";

<?php

$config = require_once "config.php";
if (file_exists("Database.php")) {
    require_once "Database.php";
} else {
    echo "Database File Not Found";
}
$heading = "Note";
$noteId = $_GET['id'];
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$query = "SELECT * FROM `notes` WHERE `id`=:id;";
$note = $db->query($query, [':id' => $noteId])->fetch();
require "views/note.view.php";

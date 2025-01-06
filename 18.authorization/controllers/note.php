<?php

$config = require_once "config.php";
if (file_exists("Database.php")) {
    require_once "Database.php";
} else {
    echo "Database File Not Found";
}
if (file_exists("Response.php")) {
    require_once "Response.php";
} else {
    echo "Response File Not Found";
}
$heading = "Note";
$noteId = $_GET['id'];
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$query = "SELECT * FROM `notes` WHERE `id`=:id;";
$note = $db->query($query, [':id' => $noteId])->fetch();
$currentUserId = 3;
if (!$note) {
    abort();
}
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}
require "views/note.view.php";

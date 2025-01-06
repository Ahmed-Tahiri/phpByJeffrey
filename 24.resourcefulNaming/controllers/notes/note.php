<?php
$heading = "Note";
$noteId = $_GET['id'];
$config = require('config.php');
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$query = "SELECT * FROM `notes` WHERE `id`=:id;";
$note = $db->query($query, [':id' => $noteId])->findOrFail();
$currentUserId = 2;
$db->authorize($note['user_id'] === $currentUserId);

require "views/notes/note.view.php";

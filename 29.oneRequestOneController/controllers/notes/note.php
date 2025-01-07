<?php

use Core\Database;

$config = require(basePath('config.php'));
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$currentUserId = 2;

$noteId = $_GET['id'];
$query = "SELECT * FROM `notes` WHERE `id`=:id;";
$note = $db->query($query, [':id' => $noteId])->findOrFail();
$db->authorize($note['user_id'] === $currentUserId);

views('notes/note.view.php', ['heading' => 'Note', 'note' => $note]);

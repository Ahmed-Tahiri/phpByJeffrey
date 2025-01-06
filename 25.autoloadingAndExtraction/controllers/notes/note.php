<?php
$noteId = $_GET['id'];
$config = require(basePath('config.php'));
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$query = "SELECT * FROM `notes` WHERE `id`=:id;";
$note = $db->query($query, [':id' => $noteId])->findOrFail();
$currentUserId = 2;
$db->authorize($note['user_id'] === $currentUserId);


views('notes/note.view.php', ['heading' => 'Note', 'note' => $note]);

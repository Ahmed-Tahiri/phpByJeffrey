<?php

use Core\Database;

$config = require(basePath('config.php'));
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$currentUserId = 2;

$noteId = $_POST['noteId'];
$query = "SELECT * FROM `notes` WHERE `id` = :id;";
$note = $db->query($query, [':id' => $noteId])->findOrFail();
$db->authorize($note['user_id'] === $currentUserId);
$delQuery = "DELETE FROM `notes` WHERE `id` = :id;";
$db->query($delQuery, [':id' => $noteId])->findOrFail();
header('location: /notes');
exit();

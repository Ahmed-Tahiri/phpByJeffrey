<?php

use Core\App;

$db = App::resolve('Core\Database');
$currentUserId = 2;
$noteId = $_POST['noteId'];
$query = "SELECT * FROM `notes` WHERE `id` = :id;";
$note = $db->query($query, [':id' => $noteId])->findOrFail();
$db->authorize($note['user_id'] === $currentUserId);
$delQuery = "DELETE FROM `notes` WHERE `id` = :id;";
$db->query($delQuery, [':id' => $noteId])->findOrFail();
header('location: /notes');
exit();

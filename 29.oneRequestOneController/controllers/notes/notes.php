<?php

use Core\Database;

$config = require(basePath('config.php'));
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$query = "SELECT * FROM `notes`;";
$notes = $db->query($query)->get();


views('notes/notes.view.php', ['heading' => 'Notes', 'notes' => $notes]);

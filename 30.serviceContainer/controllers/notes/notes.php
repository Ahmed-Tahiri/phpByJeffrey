<?php

use Core\App;

$db = App::resolve('Core\Database');
$query = "SELECT * FROM `notes`;";
$notes = $db->query($query)->get();


views('notes/notes.view.php', ['heading' => 'Notes', 'notes' => $notes]);

<?php

$heading = 'Create Note';
$config = require('config.php');
$db = new Database($config['database'], 'root', 'Ahmed1682&9');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if (strlen($_POST['note']) === 0 || $_POST['note'] === null) {
        $errors['isNull'] = "Please Enter Data in the field.";
    }
    if (strlen($_POST['note']) > 300) {
        $errors['limit Exceeded'] = "Text Limit Increased.";
    }
    if (empty($errors)) {
        $query = 'INSERT INTO notes(note, user_id) VALUES(:note, :user_id);';
        $db->query($query, [
            ':note' => htmlspecialchars($_POST['note']),
            ':user_id' => 2
        ]);
    }
}
require_once "views/create.note.view.php";

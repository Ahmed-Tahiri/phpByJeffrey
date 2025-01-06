<?php
require_once('Validator.php');
$heading = 'Create Note';
$config = require('config.php');
$db = new Database($config['database'], 'root', 'Ahmed1682&9');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if (!Validator::inputValidator(htmlspecialchars($_POST['note']), 1, 300)) {
        $errors['invalid Input'] = "Your Input Data should contain minimum 1 and maximum 300 characters.";
    }
    if (empty($errors)) {
        $query = 'INSERT INTO notes(note, user_id) VALUES(:note, :user_id);';
        $db->query($query, [
            ':note' => htmlspecialchars($_POST['note']),
            ':user_id' => 2
        ]);
    }
}
require_once "views/notes/create.note.view.php";

<?php

use Core\Database;
use Core\Validator;

$config = require(basePath('config.php'));
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$successMsg = "";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::inputValidator(htmlspecialchars($_POST['note']), 1, 300)) {
        $errors['invalid Input'] = "Your Input Data should contain minimum 1 and maximum 300 characters.";
    }
    if (empty($errors)) {
        $query = 'INSERT INTO notes(note, user_id) VALUES(:note, :user_id);';
        $db->query($query, [
            ':note' => htmlspecialchars($_POST['note']),
            ':user_id' => 2
        ]);
        $_POST['note'] = "";
        $successMsg = "Note Created Successfully.";
    }
}
views('notes/create.note.view.php', ['heading' => 'Create Note', 'successMsg' => $successMsg, 'errors' => $errors]);

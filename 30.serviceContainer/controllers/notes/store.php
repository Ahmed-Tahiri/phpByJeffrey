<?php


use Core\Validator;
use Core\App;

$db = App::resolve('Core\Database');
$successMsg = "";
$errors = [];

if (!Validator::inputValidator(htmlspecialchars($_POST['note']), 1, 300)) {
    $errors['invalid Input'] = "Your Input Data should contain minimum 1 and maximum 300 characters.";
}
if (!empty($errors)) {
    return  views('notes/create.note.view.php', [
        'heading' => 'Create Note',
        'successMsg' => $successMsg,
        'errors' => $errors
    ]);
} else {
    $query = 'INSERT INTO notes(note, user_id) VALUES(:note, :user_id);';
    $db->query($query, [
        ':note' => htmlspecialchars($_POST['note']),
        ':user_id' => 2
    ]);
    $_POST['note'] = "";
    $successMsg = "Note Created Successfully.";
    return  views('notes/create.note.view.php', [
        'heading' => 'Create Note',
        'successMsg' => $successMsg,
    ]);
    die();
}

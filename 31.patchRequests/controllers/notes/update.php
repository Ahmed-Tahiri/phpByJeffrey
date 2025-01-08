<?php

use Core\App;
use Core\Validator;

$errors = [];
$currentUserId = 2;
$db = App::resolve('Core\Database');
$query = "SELECT * FROM `notes` WHERE `id`=:id;";
$note = $db->query($query, [':id' => $_POST['noteId']])->findOrFail();

$db->authorize($note['user_id'] === $currentUserId);


if (!Validator::inputValidator(htmlspecialchars($_POST['note']), 1, 300)) {
    $errors['invalid Input'] = "Your Input Data should contain minimum 1 and maximum 300 characters.";
}

$successMsg = '';
if (!empty($errors)) {

    return  views('notes/edit.view.php', [
        'heading' => 'Create Note',
        'successMsg' => $successMsg,
        'errors' => $errors,
        'note' => $note,
    ]);
} else {
    $query = 'UPDATE `notes` SET `note`=:note WHERE `id`=:id;';
    $db->query($query, [
        ':note' => htmlspecialchars($_POST['note']),
        ':id' => $note['id']
    ]);
    $_POST['note'] = "";
    echo "Error";
    $successMsg = "Note Created Successfully.";
    header('location:/notes');
    die();
}

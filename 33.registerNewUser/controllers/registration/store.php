<?php

use Core\App;
use Core\Validator;

session_destroy();
unset($_SESSION['errors']);
unset($_SESSION['success']);
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$db = App::resolve('Core\Database');
$query = 'SELECT * FROM `users` WHERE `email`=:email;';
$user = $db->query($query, [':email' => $email])->findOrFail();
$errors = [];
if ($user) {
    $errors['user Exists'] = 'Account with same email found, Use different one.';
}

if (!Validator::emailValidator(htmlspecialchars($email), 7, 255)) {
    $errors['invalid Email'] = "Your Email should contain minimum 7 and maximum 255 characters.";
}
if (!Validator::inputValidator(htmlspecialchars($username), 2, 255)) {
    $errors['invalid Username'] = "Your Username should contain minimum 2 and maximum 255 characters.";
}
if (!Validator::inputValidator(htmlspecialchars($password), 7, 255)) {
    $errors['invalid Input'] = "Your Password should contain minimum 7 and maximum 255 characters.";
}
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('location: /register');
    exit();
}
if (empty($errors) && !$user) {
    $inputQuery = 'INSERT INTO `users`(`username`, `email`, `password`) VALUES(:username, :email, :password);';
    $user = $db->query($inputQuery, [':username' => $username, ':email' => $email, ':password' => $password])->findOrFail();
    unset($_SESSION['errors']);
    $_SESSION['errors'] = null;
    $_SESSION['success'] = 'Account Registration Successful.';
    $_SESSION['email'] = $email;
    header('location: /register');
    exit();
}

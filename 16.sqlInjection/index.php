<?php
require_once "functions.php";
require_once "Database.php";
$config = require_once "config.php";


$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$id = $_GET['id'];
$query = "SELECT * FROM `users` WHERE id = :id";
$user = $db->query($query, [':id' => $id])->fetch();
dd($user);

<?php
require_once "functions.php";
require_once "Database.php";
$config = require_once("config.php");



$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$posts = $db->query("SELECT * FROM posts;")->fetchAll();
dd($posts);

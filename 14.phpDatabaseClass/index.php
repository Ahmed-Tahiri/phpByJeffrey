<?php
require "functions.php";
require "Database.php";



$posts = new Database();
$results = $posts->query("SELECT * FROM posts;")->fetchAll(PDO::FETCH_ASSOC);
dd($results);

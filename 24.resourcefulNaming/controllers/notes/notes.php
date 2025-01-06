<?php
$heading = "Notes";
$config = require('config.php');
$db = new Database($config['database'], 'root', 'Ahmed1682&9');
$query = "SELECT * FROM `notes`;";
$notes = $db->query($query)->get();
require "views/notes/notes.view.php";

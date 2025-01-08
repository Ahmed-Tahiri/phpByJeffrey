<?php
$router->get('/', 'controllers/home.php');
$router->get('/home', 'controllers/home.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/notes.php');
$router->get('/note', 'controllers/notes/note.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->get('/notes/create', 'controllers/notes/create.note.php');
$router->post('/notes/create', 'controllers/notes/store.php');

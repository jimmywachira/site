<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/notes', 'notes/index.php')->only('auth');
$router->get('/note', 'notes/show.php');
$router->delete('/note', 'notes/destroy.php');

$router->get('/note/edit', 'notes/edit.php');
$router->patch('/note', 'notes/update.php');

$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php');
$router->delete('/session', 'session/destroy.php')->only('auth');


/*
return [
    '/'=>'index.php',
    '/about'=>'about.php',
    '/contact'=>'contact.php',

    '/notes'=>'notes/index.php',
    '/note'=>'notes/show.php',
    '/note/create'=>'notes/create.php'
];


return [
[
    'uri' => '/',
    'controller' => 'index.php',
    'method' => 'GET'
],
[
    'uri' => '/contact',
    'controller' => 'contact.php',
    'method' => 'GET'
],
[
    'uri' => '/about',
    'controller' => 'about.php',
    'method' => 'GET'
],
[
    'uri' => '/notes',
    'controller' => 'notes/index.php',
    'method' => 'GET'
],
[
    'uri' => '/note',
    'controller' => 'notes/show.php',
    'method' => 'GET'
],

[
    'uri' => '/note/create',
    'controller' => 'notes/create.php',
    'method' => 'GET'
],
[
    'uri' => '/note/destroy',
    'controller' => 'notes/destroy.php',
    'method' => 'GET'
]
];

*/
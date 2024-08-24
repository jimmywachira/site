<?php

$router->get('/', 'controllers/index.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');


/*
return [
    '/'=>'controllers/index.php',
    '/about'=>'controllers/about.php',
    '/contact'=>'controllers/contact.php',

    '/notes'=>'controllers/notes/index.php',
    '/note'=>'controllers/notes/show.php',
    '/note/create'=>'controllers/notes/create.php'
];


return [
[
    'uri' => '/',
    'controller' => 'controllers/index.php',
    'method' => 'GET'
],
[
    'uri' => '/contact',
    'controller' => 'controllers/contact.php',
    'method' => 'GET'
],
[
    'uri' => '/about',
    'controller' => 'controllers/about.php',
    'method' => 'GET'
],
[
    'uri' => '/notes',
    'controller' => 'controllers/notes/index.php',
    'method' => 'GET'
],
[
    'uri' => '/note',
    'controller' => 'controllers/notes/show.php',
    'method' => 'GET'
],

[
    'uri' => '/note/create',
    'controller' => 'controllers/notes/create.php',
    'method' => 'GET'
],
[
    'uri' => '/note/destroy',
    'controller' => 'controllers/notes/destroy.php',
    'method' => 'GET'
]
];

*/
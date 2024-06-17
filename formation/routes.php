<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'=> 'index.php',
    '/about'=> 'about.php',
    '/contact'=> 'contact.php',
    'notes'=> 'notes.php',
    '/note/:'=> 'note.php',
    '/notes/create '=> 'note-create.php',
];
function abort($code = 404){
    http_response_code($code);
    require'404.php';
    die();
}

    function routeToController($uri, $routes){   
    if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
    } else {
    abort();
      }
    }

    routeToController($uri, $routes);
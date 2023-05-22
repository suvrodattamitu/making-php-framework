<?php

$routes = require base_path("routes.php");

function routeToController($uri, $routes)
{
    if(key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);

function abort($code = 404)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

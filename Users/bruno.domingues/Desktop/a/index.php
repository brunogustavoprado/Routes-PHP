<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/a/' => 'controllers/inicial.php',
    '/a/contato' => 'controllers/contato.php',
    '/a/planos' => 'controllers/planos.php'

];

if (array_key_exists($uri,$routes)){
   require $routes[$uri];
}
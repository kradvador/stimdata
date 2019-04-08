<?php

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// on passe l'url en parametre pour choisir quoi faire selon celle que l'on a
// chaque cas du switch est une route


switch ($request_uri[0]) {
    // Home page
    case '/stimdata/':
        require 'views/index.php';
        break;
    // logged in
    case '/stimdata/logged':
        require 'views/logged.php';
        break;

//     Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require 'views/404.php';
        break;
}
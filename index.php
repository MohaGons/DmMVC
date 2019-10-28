<?php

$requestedPages = '/';

if (isset($_SERVER['REQUEST_URI'])) {
    $requestedPages = $_SERVER['REQUEST_URI'];
    $requestedPages = explode('?', $requestedPages);
}

switch ($requestedPages[0]) {
    case '/home':
        include_once(__DIR__ . '/Controller/Controller.php');
        break;

    default:
        require_once(__DIR__ . '/View/home.php');

}
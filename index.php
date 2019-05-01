<?php

spl_autoload_register(function ($class) {
    require __DIR__ . '/class/' . str_replace('\\', '/', $class) . '.php';
});

$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);

$action = $parts[1] ? $parts[1] : 'index';

$controller = new Controller();

$controller->$action($parts[2] ?? null);








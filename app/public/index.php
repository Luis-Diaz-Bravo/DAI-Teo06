<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$router = new App\Router();

$router->get('/', ['App\Home', 'index']);

echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

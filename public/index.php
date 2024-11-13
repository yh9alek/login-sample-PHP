<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\UsersController;

$router = new Router;

$router->get('/', [UsersController::class, 'index']);
$router->get('/signin', [UsersController::class, 'index']);
$router->post('/signin', [UsersController::class, 'index']);

$router->resolve();
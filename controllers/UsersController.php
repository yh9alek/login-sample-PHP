<?php

namespace app\controllers;

use app\Router;

class UsersController {

    public static function index(Router $router) {

        $pageTitle = 'Sign in';

        $router->renderView('users/signin', [
            'pageTitle' => $pageTitle,
        ]);
    }

}
<?php

namespace app\controllers;

use app\Router;

class UsersController {

    public static function index(Router $router) {

        self::signin($router);

    }

    public static function signin(Router $router) {
        
        $pageTitle = 'Sign in';

        $router->renderView('users/signin', [
            'pageTitle' => $pageTitle,
        ]);

    }

    public static function signup(Router $router) {

        $pageTitle = 'Sign up';

        $router->renderView('users/signup', [
            'pageTitle' => $pageTitle,
        ]);

    }

}
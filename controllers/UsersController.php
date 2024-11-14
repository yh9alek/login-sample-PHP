<?php

namespace app\controllers;

use app\Router;
use app\models\User;

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
        $errors = [];

        $userData = [
            'username' => '',
            'email' => '',
            'password' => '',
            'sign' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $userData['username']  = $_POST['username']  ?? null;
            $userData['email']     = $_POST['email']     ?? null;
            $userData['password']  = $_POST['password']  ?? null;
            $userData['sign']      = 'signin';

            $user = new User;
            $user->load($userData);
            $errors = $user->save($_POST['cpassword'] ?? null);

        }

        $router->renderView('users/signup', [
            'pageTitle' => $pageTitle,
            'user' => $userData,
            'errors' => $errors,
        ]);

    }

}
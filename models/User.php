<?php

namespace app\models;

use app\Database;

class User {
    public ?string $id = "";
    public ?string $username = "";
    public ?string $email = "";
    public ?string $password = "";
    public ?string $sign = "";

    public function load(array $user) {

        $this->id = $user['id'] ?? null;
        $this->username = $user['username'];
        $this->email = $user['email'];
        $this->password = $user['password'];
        $this->sign = $user['sign'];

    }

    public function save(string $cpassword): array {

        $errors = [];

        if(!$this->username || !$this->email || !$this->password || !$cpassword) {
            $errors[] = "Fields are missing to fill in";
            return $errors;
        }

        if($this->password && $cpassword) {
            if(!strcmp($this->password, $cpassword)) {
                $errors[] = "Passwords do not match";
            }
        }

        if(empty($errors)) {

            !$this->id ? Database::$db->createUser($this) :
                         Database::$db->getUser($this) ;
            
            header('Location: /'.$this->sign);
            exit;
        }

        return $errors;

    }
}
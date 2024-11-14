<?php

namespace app;

use \PDO;
use app\models\User;

class Database {
    public PDO $pdo;
    public static Database $db;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=db_projects;', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = $this;
    }

    public function createUser(User $user): void {

        $statement = $this->pdo->prepare('INSERT INTO `users` (`username`, `email`, `password`) VALUES (:username, :email, :password);');

        $statement->bindValue(':username', $user->username);
        $statement->bindValue(':email', $user->email);
        $statement->bindValue(':password', password_hash($user->password, PASSWORD_BCRYPT));

        $statement->execute();
    }

    public function getUser(User $user): array {

        $statement = $this->pdo->prepare('SELECT * FROM `users` WHERE `id` = :id;');
        $statement->bindValue(':id', $user->id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
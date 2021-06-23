<?php

require_once __DIR__.'/../../Database.php';

class newUserRepository
{
    public static function register($username, $email, $password){
        $database = new Database();
        $password = md5($password);

        $stmt = $database->connect()->prepare('
            INSERT INTO public."users" ("username", "email", "password") VALUES (:username, :email, :password)
        ');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $stmt->execute();

    }
}
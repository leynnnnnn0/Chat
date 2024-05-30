<?php

class SignupModel
{
    public static function sign_up_user(Database $pdo, string $username, string $email, string $password, string $firstName, string $lastName)
    {
        try {
            $query = "INSERT INTO users (username, email, pass, first_name, last_name) VALUES (:username, :email, :pass, :first_name, :last_name)";
            $hashedPass = password_hash($password, PASSWORD_BCRYPT); 
            $stmt = $pdo->query($query, [':username' => $username, ':email' => $email, ':pass' => $hashedPass, ':first_name' => $firstName, ':last_name' => $lastName]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            $_SESSION['database_error'] = ['password_validation_error' => $e->getMessage()];
        }
    }

}